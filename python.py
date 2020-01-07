import time
from selenium import webdriver
from bs4 import BeautifulSoup

driver = webdriver.Chrome(executable_path=r'C:\Users\user\Desktop\chromedriver') # chrome瀏覽器
time.sleep(3)
driver.get('https://www.youtube.com/')

for i in range(10):  # 進行十次
    driver.execute_script('window.scrollTo(0, document.querySelector("ytd-app").clientHeight);')  # 重複往下捲動
    time.sleep(1)  # 每次執行打瞌睡一秒

pageSource = driver.page_source
# print(pageSource)

soup = BeautifulSoup(pageSource, 'html.parser')  # 解析器接手
results = soup.select('yt-formatted-string#video-title')
for item in results:
    print(item.text)


# driver.close()  # 關閉瀏覽器

