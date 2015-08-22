﻿# iDiscuss校园社区

  本项目是为了整合校内资源，提供师生交流的平台，为同学们提供生活学习的服务，满足校园生活、学习、娱乐等方面各种各样的需求。

  该项目以优秀的社区项目WeCnter为基础，改造，优化，整合，使之满足特色需求。
  
##增添功能


    1、校内登录和验证模块     (完成)


    打开页面后，用户登录社区，才可以参与评论和发布信息，验证主要是通过cURL抓包，模拟校园网登录，获取校园网数据库信息，通过正则式提取出关键信息验证学生身份
    
    2、“学校活动”模块 
  
    展示校园活动宣传海报以及活动地点时间以及报名方式
    
    3、广告插入模块 
  
    承接校内广告，在页面中以弹框和边角的空余显示广告
    
    4、资源分享模块 
  
    收集学生考研资源，由于没有足够空间保存，所以目前使用百度云存储，在页面显示资源链接和密码，通过列表分类和查询
    
    5、文章发表模块 

  后续功能陆续增添！


##安装使用说明

  1、在有配置好的apache和mysql环境中安装，新建UPLOAD将项目所有文件放入其中，UPLOAD放入apache/htdocs目录下

  2、在浏览器输入http://localhost/UPLOAD进入iDiscuss安装界面，按照提示安装，依次输入数据库用户名、密码、数据库名（idiscuss）(需要手动在mysql创建)、端口不需要填写、前缀zzu_下一步，完成
  
  3、登陆管理员，进入后台管理，修改 全局设置-注册访问 中的“新用户验证类型”为“不验证”；修改 全局设置-内容设置 中开启“帮助中心” 和 “活动系统”；修改 内容设置 中 分类管理 和 导航设置如下：
  ![Alt text](./pic/1.png "分类")
  ![Alt text](./pic/2.png "导航")

  3、每次修改后不成功请不要提交，提交前做好测试，修改后请写明修改内容

  4、提交时删除system/config/install.lock.php文件（删除之后下次可直接安装，不删除无法安装）

