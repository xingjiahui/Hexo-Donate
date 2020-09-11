# Hexo-Donate

> 本文档内容已于2020.09.11更新

❤打赏系统；打赏作者并填写打赏信息后可展示在打赏列表中；

GitHub项目地址：https://github.com/xingjiahui/Hexo-Donate

# 写在前面

1. 作者是大二软工学生，在 `代码规范` 、`系统强壮性` 等方面肯定存在欠缺，但也在努力提升自己。

2. 自己的 [个人博客](https://plushine.cn) 搭建好后，又用之前学的 Web前端知识写了打赏页面，思路是：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/a3891ccdace5c9d86ecdb27ed64cdf27.png" width="80%"/>

   给 [IamZLT](https://www.iamzlt.com/) 体验后，也是觉得不太友善（从 `填写问卷` 到看到 `自己的打赏信息` 需要等待的时间太长）

   决定改版，从确定思路到验证思路可行性，再从测试版发布到逐渐功能完善差不多一周的时间，最终有了此打赏系统。

   新版本思路：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/64ca8c6d546f91ddb1e5366c7c7c998e.png" width="80%"/>

3. 系统用到的 `数据库`、`PHP` 等方面知识我还是个 `小白`，但能凭自己能力把它 `实现出来` 就已经 `很满意` 了。

4. 问题或不足欢迎开 [issues](https://github.com/xingjiahui/Hexo-Donate/issues) 或到 [XJHui's Blog](https://plushine.cn) 留言。

## 关于系统

理论上不管你是什么博客框架，只要有一个空白页面就能安排上...

打赏列表`demo`：[https://plushine.cn/donate](https://plushine.cn/donate)

问卷页面`demo`：[https://donate.plushine.cn](https://donate.plushine.cn)

后台管理暂时需要在phpMyAdmin中操作，如有必要以后可以添加 `管理员页面`

## 已支持的功能

1. 打赏列表可统计 `总打赏人数` 、`打赏金额`
2. 不同打赏方式字体 `显示颜色` 不同
3. 填写打赏问卷并成功上传，可在打赏列表中 `显示` 填写的信息
4. 数据上传成功后，博主会收到 `QQ消息` 提醒

## 待更新内容

1. 区分`已核实`、`未核实`金额（在做）
2. 丰富 `QQ消息` 提醒内容（在做）
3. 接入`微信`推送（未开始）
4. 使用github action替代虚拟主机（未开始）
5. 使用官方接口，实现 `自动` 审核（放弃）

## 系统界面图

1. 打赏列表：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/ac47e36e68e2278a8fc8736b24353405.png" width="80%"/>

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/eab12c5a3751c338918fc1d7fbea33cf.png" width="80%"/>

2. 问卷页面：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/bf0b6e623ab00f0f62c64347b4c2b385.png" width="80%"/>

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/5ab30519993983dfd77dc29b05f81e0a.png" width="80%"/>

3. 操作GIF实录：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/f955737bc0ab1ba07b7ee726a51fd6b6.png" width="80%"/>

## 安装系统要求

1. 虚拟主机（有教程（免费））

2. 准备页面、域名：

   - 显示打赏列表的页面

   - 打赏问卷页面域名（二级域名即可，并为其申请证书）

# 使用该系统

> 教程中的虚拟主机会定期维护，维护前我会发布在 [博主动态](https://plushine.cn/log/) 页面

## 虚拟主机

> 因为爱网云更换了官网框架，但购买免费主机步骤相似

购买教程在这篇 [文章]([https://plushine.cn/38834.html#%E8%99%9A%E6%8B%9F%E4%B8%BB%E6%9C%BA](https://plushine.cn/38834.html#虚拟主机)) 已经写过，不在赘述！

## 下载并上传

1. 到 [项目页](https://github.com/xingjiahui/Hexo-Donate) 选择 `clone or download` 选择 `Download ZIP`：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/9c8d0268c1504c90aefffcd6ff212b71.png" width="80%"/>

2. 在虚拟主机 `控制面板` 选择 `在线文件管理器` 并进入 `www` 目录下：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/0f4144a35dbddfd6d2db848ae0afa960.png" width="80%"/>

   解压后如图：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/96a7dbb54ef0408c6358f29ffdd306ea.png" width="80%"/>

   框选出的 `文件/文件夹` 可删除。

## 导入数据库

点击 `donate_info.sql` 文件后的 `导入` ，提示输入 `数据库密码` ：

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/bedfd6547e488be84648b139334fa047.png" width="50%"/>

数据库密码在下图位置，复制后填入上图位置：

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/09/11/9824fa78754002d5a1efdcfcab85c8c2.png" width="50%"/>

填入密码，点击导入即可：

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/ffe729a5131d3577fbe2d0a80f87464f.png" width="80%"/>

注意：

- 导入后若非上图结果，请检查一下填写的 `数据库密码` 是否正确

- 为了便于测试，导入的数据库中自带了两条数据：

  <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/e15b74b8224d99106ebcf2c6459908ab.png" width="80%"/>

  测试结束后，可自行删除！

## 搭建问卷网站

其实，将项目文件导入后，网站已经搭建完成：

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/611b8463e1513d64c9972825a124e040.png" width="80%"/>

但虚拟主机自带的域名为（http），不能满足我们的需要，因此需要自定义域名（并开启https）！

## 自定义域名

1. 登录主机面板首页点击 `域名绑定`，并按下图操作：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/09/11/43250f42afb6846ed12d9fe344b9ddb6.png" width="80%"/>

2. 域名解析记录添加方法如下图：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/09/11/d3802108d22a9f2d8882735ac4858e16.png" width="50%"/>

3. 申请ssl证书：可以在域名注册商那里申请，也可以自行百度（证书免费，不要去付费购买）

4. 绑定ssl证书：

   - 将申请的ssl证书下载并解压（后缀必须是pem和key，否则代表下载的类型不对）：

     <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/09/11/e29b94797d0130e3bbacbbbe0b6e5d46.png" width="80%"/>

   - 回到面板首页，点击SSL证书，按下图操作：

     <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/09/11/8591a3685b0c0095a1d253ec51f4f923.png" width="80%"/>

   

## 配置虚拟主机

> 面板首页中点击 '在线文件' 并进入www目录，完成下面的操作

1. 配置 `getJsonData.php`

   点击 `编辑` ：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/5efe0631772f4f7e223e37b45f828eb2.png" width="80%"/>

   找到下图框选出的位置：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/b46e1c658538211281ec4426616fbfc3.png" width="80%"/>

   还记得 `主机信息` 么，将对应的信息替换。

2. 配置 `regist.php`

   点击 `编辑`，找到下图框选出的位置：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/ebc6cebaf4f9938f220dcd41809dac5c.png" width="80%"/>

   下图位置也要修改：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/97264e75c20b6bf3dd33f419a1bfc5fe.png" width="80%"/>

3. 测试数据库是否配置成功

   访问上面那个域名，填写上信息：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/2f10eb77aa042d76d595e3ccd5f1ad42.png" width="80%"/>

   上传，判断是否配置成功：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/718337aaee439cc63583142d20200c43.png" width="80%"/>

   ​	注意：只要是提示 `错误/警告` 一定是操作问题，认真检查。

4. 检查数据导出是否正常：

   浏览器访问：`域名/getJsonData.php`

   查看能否导出数据库内容：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/07/10/8e58fde13914ac27e4850ea7351a2856.png" width="80%"/>

目前为止，`打赏页面 ` 和 `数据库` 已经配置好了，最后就是在 `前端` 把数据库中的数据展现出来。

## 编辑前端页面

1. fork  [Hexo-Donate](https://github.com/xingjiahui/Hexo-Donate) 这个项目（喜欢就赏个star吧）：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/7d1b388716cc67f1f67785d0a01d6b07.png" width="80%"/>

2. fork后，在自己仓库中的Hexo-Donate项目中编辑donateJS.js文件

   点击下图位置可以在线修改文件：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/5216b2f9181afbaf4d974f72f900d1a3.png" width="80%"/>

   修改内容为：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/c5cdda70b98975708430b215ac906530.png" width="80%"/>

   注意：域名一定是完整的（包含https）。

3. 编辑下面的代码并粘贴到前面准备的空白页面：

   > Hexo框架下无论post（博客）还是page（页面）都是`markdown`格式，但`markdown`兼容`html`提供了很大的便利性。

   修改下图位置代码：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/4014fc76f26a02949d0bbc9a8dd86d96.png" width="80%"/>

   粘贴到空白页面（markdown/html均可）：

   ```html
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sviptzk/HexoStaticFile@master/Hexo/css/custom.min.css">
   <p>截至 <span class="inline-tag red">nowDate</span>，共收到来自 <span class="inline-tag red">personNum</span>位小伙伴的打赏，金额为
       <span class="inline-tag red">sumDonate</span> 元！</p>
   <table>
       <thead>
       <tr>
           <th align="center">用户名</th>
           <th align="center">打赏方式</th>
           <th align="center">打赏金额</th>
           <th align="center">是否核实</th>
       </tr>
       </thead>
   </table>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/改成你的github用户名/Hexo-donate@master/donateJS.js"></script>
   ```

   注意：

   - 上面代码中引用css不符合规范，但暂时没有找到替代的方法。
   - 粘贴该代码后，不要在其前面添加任何内容，否则会显示失败（已知bug，下版本更新）

4. 检查前端页面是否能够正常显示数据：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/3f2d26f4dcc1566c4ccc6ae2d363f61e.png" width="80%"/>

## 提醒功能

1. 到 [Qmsg酱](https://qmsg.zendee.cn/) 这里登陆并选择一个`Qmsg酱小姐姐`：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/9f6cececc214234cb6c20e7cb03e8721.png" width="50%"/>

2. 添加一个QQ号：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/2c052d848323f2d00ca1253a4e40c049.png" width="50%"/>

   注意：记得要添加小姐姐为好友呀，不然怎么给你发消息。

3. 点击 `文档`，用接口地址替换下面代码中的`接口地址`：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/0e38a41c1dd4582dec5c749c850efdce.png" width="80%"/>

   ```php
   echo '<script>function Qmsg(){var xhr=new XMLHttpRequest();url="接口地址?msg=收到新的打赏啦！";url=encodeURI(url);xhr.open("GET",url,true);xhr.send()}Qmsg();</script>';
   ```

4. 在`www`目录下编辑`regist.php`文件，将上面的代码粘贴在下图位置：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/167ff49d7ff04ce7b36fd5978958a272.png" width="80%"/>

# 后期使用

1. 填写打赏问卷后，点击 `返回打赏列表` 会跳转到作者的打赏列表：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/e4511abecd694a2baf0f6701da36c8f5.png" width="50%"/>

   想修改为自己的，可以修改虚拟主机 `www` 目录下的 `index.html` 文件：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/dfb592536c385770cc720c92026a294c.png" width="50%"/>

2. 后期维护：

   当有人打赏后，根据填写的打赏方式去账户看有没有到账。

   - 收到打赏：将数据库中 `donate_confirm` 字段修改为 `YES`

     <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/0ebac5c74e1b186617efdd350df73009.png" width="80%"/>

   - 未收到打赏：在数据库中将该记录删除

     <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/04/c75f22ff5da7c527a9e536fa2eea20bf.png" width="80%"/>

至此， `Hexo-Donate` 打赏系统全部安装完成！

# 感谢

[爱网云](https://host.iisat.cn/)、[JsDelivr](https://www.jsdelivr.com/)、[Qmsg酱](https://qmsg.zendee.cn/)、[乱世中的单纯](https://my.oschina.net/zhangxuman/blog/504983)

[FLORIN POP](https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/)、[涛歌依旧](https://blog.csdn.net/stpeace/article/details/50757929)、[Yiven](https://www.cnblogs.com/yiven/p/6491019.html)、[程序小能手](https://jingyan.baidu.com/article/a3aad71a28c76cb1fb0096b5.html)

[怪我咯](https://www.php.cn/php-weizijiaocheng-361604.html)、[SweetAlert2](http://mishengqiang.com/sweetalert2/)、[BigShow](https://www.cnblogs.com/bigshow1949/p/7116797.html)、[百度经验](https://jingyan.baidu.com/article/cdddd41c2bbde413ca00e16a.html)























