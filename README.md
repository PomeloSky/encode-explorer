Encode Explorer (Bootstrap 5 & PHP 8.0+ Mod)
==================================

Encode Explorer is a lightweight, single-file file browser written in PHP. This modified version (v6.4.5) has been completely upgraded to support **PHP 8.0+** and modernized with **Bootstrap 5**, featuring a fully responsive, clean user interface with **Dark/Light Mode** support.

It displays the list of files in a folder and is designed to be simple, highly functional, and easy to deploy. Free for everyone.

Features
----------------------------------
* **Modern & Responsive UI**: Rebuilt with Bootstrap 5 and Bootstrap Icons for flawless display on desktops, tablets, and mobile devices.
* **Dark Mode Support**: Built-in Light/Dark mode toggle with user preference memory.
* **PHP 8.0+ Compatible**: Updated syntax, strict type handling, and modernized codebase.
* **Single-file deployment**: Everything (backend, frontend, icons, and translations) is packed into a single `index.php` file.
* **Multilingual**: Includes traditional and new translations (English, zh-TW, zh-CN, jp, vn, and 15+ more) with customized string support.
* Files can be sorted by name, size, and editing time.
* Directory navigation and breadcrumbs via a new top Navbar.
* Thumbnails preview for images and PDF files.
* File uploading and directory creation.
* File and directory deletion (Admin only).
* Logging and email notifications.
* Optional password protection (User/Admin roles).

Manual
----------------------------------
1. Upload `index.php` to the directory on your server that you want to share or manage.
2. Open `index.php` with a text editor to configure settings (e.g., passwords, hidden files, upload permissions) in the `$_CONFIG` array at the top of the file. All original settings and documentation are preserved.
3. **Important**: Make sure to save the file in **UTF-8** encoding if you modify any settings to avoid broken characters or images.

Requirements
----------------------------------
* Web Server (Apache, Nginx, etc.)
* PHP 8.0 or higher
* (Optional) PHP GD extension for image thumbnails
* (Optional) PHP ImageMagick extension for PDF thumbnails
* (Optional) PHP Fileinfo extension for accurate MIME type detection

License
----------------------------------
This software is distributed under The MIT License (MIT).

Copyright (c) 2023 Marek Rei (Original Author)
Modified for Bootstrap 5 & PHP 8.0+ Compatibility by YucDu (https://yucdu.com)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
