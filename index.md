---
layout: page
title: 首頁
tagline: PagodaBox Quickstart - WordPress 正體中文
group: main
---
{% include JB/setup %}

想要開始使用，請閱讀 [安裝](install.html) 部分

## 關於 WPPB 正體中文
---
這是由 {{ site.author.name }} 所製作的 PagodaBox Quickstart

主要是提供初次架設網站，或者需要快速在雲端平台上架設 WordPress 的人使用。

## 主要功能
---

* 快速安裝 WordPress
* 線上安裝插件、佈景


因為雲端平台大多是「唯獨」檔案系統，因此沒辦法提供更新版本的功能。

## 功能追加
---

即使現在已經沒有使用上的問題，不過仍希望能有更優質的環境。

目前，唯一的問題是 wp-config.php 設定檔的產生，因為沒有辦法順利改寫，因此 AUTH TOKEN 仍是固定的，這是目前最需要修正的部分。<br />
（也許會考慮建立一個專門產生的網站，提供解決這部分的問題）

除此之外，也希望能夠在安裝完畢時同時也設定好 Memcache/Redis 這類快取系統，以提供更優質的網站運作環境。
