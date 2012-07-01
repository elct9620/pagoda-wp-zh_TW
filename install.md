---
layout: page
title: 安裝
description: ""
group: main
---
{% include JB/setup %}

在一般 PaaS 環境上運行需要經過：

* 創建 Application
* 初始化 Git
* 撰寫設定檔（部分不需要）
* 新增遠端 Repo 伺服器
* 上傳

不過 PagodaBox 提供了直接從 Git Repo 下載後運行的服務，並且加以整合為 QuickStart 功能。

透過這個功能，只需要打開 [WPPB 正體中文 QuickStart](https://pagodabox.com/cafe/elct9620/wordpress-zhtw) 的頁面，點選 Lunch 即可。

這個過程中將會完成下列的動作：

* 建立一個 Web Instance
* 建立一個 MySQL Instance
* 配置好 wp-config.php
* 將 wp-content 設定為可寫入

之後打開您的 Application 並且輸入管理員帳號密碼以及信箱，就可以完成安裝。
