---
layout: post
title: "Untracked files from git"
date: 2015-10-26 19:26
category: Studies
---
<p class="txt-post">
Comandos básicos para 'desversionar' arquivos do git.
</p>
<br />
<br />
<p class="txt-post">
<pre>
<code>
echo "FILE_NAME" >> .gitignore
git rm --cached FILE_NAME
git add -u
git commit -m "removing files from version control"
# Sync with your git server, pull to sync and push to register your local change
git pull origin BRANCH
git push origin BRANCH
</code>
</pre>
</p>
