使用php上传文件到服务器

1.先要安装php运行环境，让index.html可以打开

2.使用chmod 777给upload目录设置权限

代码来源：https://www.oschina.net/question/12_33978

本人加入了文件保存的内容
mac os下开启php
1.开启apache
sudo apachectl start
2.可以查看mac os自代的apachectl版本
sudo apachectl －v
3.设置apache2开启php
找到Apache的配置文件，打开/etc/apache2/httpd.conf文件，搜索#LoadModule php5_module libexec/apache2/libphp5.so,去掉最前边的"#”.
4.重启apache
sudo apachectl restart
5.设置服务器www目录,mac os上的apache2的默认目录在
/Library/WebServer/Documents
可以修改/etc/apache2/httpd.conf中的路径改成别的目录
6.如果不修改，可以使用作目录软连接
ln -s 你的网站目录 /Library/WebServer/Documents/你的目录名
