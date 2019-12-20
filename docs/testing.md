# Testing

## 术语

- 套件：suite
- 测例：test

## Codeception

对Yii2的支持：

- https://codeception.com/for/yii
- https://codeception.com/docs/modules/Yii2

验证配置：

    ./vendor/bin/codecept -c frontend/codeception.yml config:validate

为套件（下的测例类）生成基类

    ./vendor/bin/codecept -c frontend/codeception.yml build

执行测试：

    ./vendor/bin/codecept run

### Unit Tests / 单元测试

- https://codeception.com/docs/05-UnitTests

### Functional Tests / 功能测试

- https://codeception.com/docs/04-FunctionalTests
- https://github.com/yiisoft/yii2-app-advanced/tree/2.0.16/frontend/tests/functional

生成测试类：

    ./vendor/bin/codecept -c frontend/codeception.yml g:cest functional SomeCest

### Acceptance Tests / 验收测试

    ./vendor/bin/codecept -c frontend/codeception.yml g:cept acceptance SomeCept
