SeaApiService
===================================
基于PHP5.4的轻量化，高安全性的API服务接口框架，专用于PHP后台的项目，给前端APP提供数据支持。

框架的特点
-----------------------------------
本框架采用package(包) + class（业务逻辑）结构来管理所有对外提供的接口服务，类似于Java访问管理模型，通信使用post方式提交json结构化数据。
接口文档的自维护是本框架的核心功能（在开发过程中能够完成接口文档的编写）。其次为了加强接口的可维护性，每个class类文件只是实现一个接口的方法。而通过package的方法可以管理无限层级数量的无限接口。
框架设计时，将业务逻辑与本地开发环境相关的处理，都通过interface的方式进行剥离，要对其功能扩展只需实例化对应的interface，在启动API服务的时候通过bind方式将类方法注入。
系统提供的interface包含了这几类：IJsonWebServiceLog(日志层)、IJsonWebServiceIoPretreatment(输入输出预处理)、IJsonWebServiceVisitPretreatment(包入口访问预处理)、IJsonWebServiceCloseReplay(截止重放攻击逻辑)
开发者进行应用层逻辑开发时，住需要在workgroup目录下，创建对应的package目录，然后继承CJsonWebServiceLogicBase类，实现IJsonWebServiceProtocol接口，就能完成应用层的业务逻辑的开发，简单易用。
接口的安全层做了专门的处理，分为了0层（数据包接收层），1层（包解析路由层），2层（应用层）

演示地址
-----------------------------------


首次使用-Service
-----------------------------------
访问入口文件的配置
接口逻辑的编写

首次使用-Service-日志
-----------------------------------
首次使用-Service-截断重放攻击
-----------------------------------

首次使用-Reflection
-----------------------------------

首次使用-Client
-----------------------------------