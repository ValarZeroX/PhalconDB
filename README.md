# 🚀 Phalcon 開發環境（Docker + Phalcon 5.8 + DevTools 5.0）

本專案使用 **Phalcon 5.8.0** 搭配 **Phalcon DevTools 5.0**，透過 Docker 快速建立開發環境。

---

## **📌 安裝與啟動**

### **1️⃣ 啟動 Docker 容器**
執行以下指令，啟動 **後端（Phalcon）+ MySQL + Nginx**：

```sh
docker-compose -f docker-compose.yml up -d
```

## 進入後端容器
```sh
docker exec -it phalcon-docker-backend-1 sh
```

## 確認 Phalcon 版本
```sh
php -v
phalcon --version
```

## 建立新的 Phalcon 專案
```sh
phalcon create-project project
```

輸入網址http://127.0.0.1/

顯示

Congratulations!
You're now flying with Phalcon. Great things are about to happen!

代表成功