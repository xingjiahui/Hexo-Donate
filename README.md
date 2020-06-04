# Hexo-Donate
❤打赏系统；打赏并填写问卷后信息可以自动在打赏列表中展示；

## 写在前面

1. 作者是大二软工学生，在`代码规范`、`系统强壮性`等方面肯定存在欠缺，但也在`努力提升`自己能力。

2. 自己的 [个人博客](https://xingjiahui.top) 搭建好后，又用之前学的`Web前端`知识写了打赏页面，思路是：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/a3891ccdace5c9d86ecdb27ed64cdf27.png" width="80%"/>

   给 [IamZLT](https://www.iamzlt.com/) 体验后，也是觉得体验`不太友善`（从`填写问卷`到看到`自己的打赏信息`需要等待的时间太长）

   决定改版，从`05.27`到`06.02`用一周的时间从`确定思路`到`测试思路可行性`，从`测试版发布`再到`功能完善`，最终有了此系统。

   新版本思路：

   <img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/64ca8c6d546f91ddb1e5366c7c7c998e.png" width="80%"/>

3. 系统用到的`数据库`、`PHP`等方面知识我还是个`小白`，但能凭自己能力把它`实现出来`就已经`很满意`了。

4. 问题或不足欢迎开 [issues](https://github.com/xingjiahui/Hexo-Donate/issues) 或到 [XJHui's Blog](https://xingjiahui.top) 留言。

## 关于系统

理论上不管什么`框架`，只要有一个`空白`页面就能安排上...

打赏列表`demo`：[https://xingjiahui/donate](https://xingjiahui/donate)

问卷页面`demo`：[https://donate.xingjiahui.top](https://donate.xingjiahui.top)

后台管理暂时需要操作`数据库`(可视化界面)，如有必要可以添加`后端管理页面`

### 已支持的功能

1. 打赏列表可统计`总打赏人数`、`打赏金额`
2. 不同打赏方式字体`显示颜色`不同
3. 填写打赏问卷并成功上传，可在打赏列表中`显示`填写的信息
4. 数据上传成功后，博主会收到`QQ消息`提醒

### 待更新内容（随时补充）

1. 区分`已核实`、`未核实`金额
2. 丰富`QQ消息`提醒内容
3. 接入`微信`推送
4. 支持`自动`审核

### 系统界面图

1. 打赏列表：

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/ac47e36e68e2278a8fc8736b24353405.png" width="80%"/>

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/eab12c5a3751c338918fc1d7fbea33cf.png" width="80%"/>

2. 问卷页面：

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/bf0b6e623ab00f0f62c64347b4c2b385.png" width="80%"/>

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/5ab30519993983dfd77dc29b05f81e0a.png" width="80%"/>

3. 操作GIF实录：

<img src="https://cdn.jsdelivr.net/gh/xingjiahui/CDN@latest/2020/06/03/f955737bc0ab1ba07b7ee726a51fd6b6.png" width="80%"/>

注：QQ消息`提醒内容`以后会丰富。

### 系统要求

1. 虚拟主机（有`免费`版本）或 云服务器（小白建议安装`宝塔`面板）
2. 为`打赏列表`准备一个页面

## 使用该系统

详见 [文档](https://xingjiahui.top) 

## 感谢

[JsDelivr](https://www.jsdelivr.com/)、[Qmsg酱](https://qmsg.zendee.cn/)、[乱世中的单纯](https://my.oschina.net/zhangxuman/blog/504983)、[FLORIN POP](https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/) 

[涛歌依旧](https://blog.csdn.net/stpeace/article/details/50757929)、[Yiven](https://www.cnblogs.com/yiven/p/6491019.html)、[程序小能手](https://jingyan.baidu.com/article/a3aad71a28c76cb1fb0096b5.html)

[SweetAlert2](http://mishengqiang.com/sweetalert2/)、[BigShow](https://www.cnblogs.com/bigshow1949/p/7116797.html)、[百度经验](https://jingyan.baidu.com/article/cdddd41c2bbde413ca00e16a.html)