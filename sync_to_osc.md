1. 在Git@OSC上创建一个项目（http://git.oschina.net/projects/new）,这里注意，不要勾选使用Readme初始化项目，不要选择项目的授权协议和.gitignore 文件，因为这些会导致项目有第一个提交。

2. 命令行进入项目目录，git status 确保项目状态为：
nothing to commit, working directory clean
如果状态不是这样，则需要通过提交、暂存等操作，使项目当前状态为clean。

3. 添加Git@OSC的remote
git remote add git-osc http://git.oschina.net/wish163/wishcodes.git

4. 推送所有分支和tags
git push git-osc --all
git push git-osc --tags
以上两条命令执行完毕，即完成导入。