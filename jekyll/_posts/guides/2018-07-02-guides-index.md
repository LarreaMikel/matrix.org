---
layout: default
categories: guides
---

<script>
    var allArticlesTableRows = {};
    //allArticlesTableRows[0].children[0].textContent

    jQuery(document).ready(function() {
        allArticlesTableRows = jQuery("table > tbody  > tr");
        allArticlesTableRows.each(index => {
            var row = allArticlesTableRows[index];
            if (row.children[3] && row.children[3].textContent) {
                var row = allArticlesTableRows[index];
                var url = row.children[0].children[0].href;
                var recommendCall = 'recommend("' + url + '", this)';
                var recommendHtml = "<span onclick='" + recommendCall + "' class='recommend'>Recommend</span>";
                row.children[3].innerHTML = recommendHtml;
            }
        })
    });

    function recommend(url, el) {
        el.classList.remove("recommend");
        el.classList.add("thanks");
        el.innerHTML = "Thank You"
        el.onclick = null;
        _paq.push(['trackEvent', 'GuideVote', 'Upvote', url]);
    }
</script>
<style>
table {
    width: 100%
}
table tr td:nth-child(1) {
    width: 50%
}

table tr td:nth-child(3), table tr td:nth-child(4) {
    width: 15%
}

.recommend {
    cursor: pointer;
    font-size: smaller;
    border: black 1px solid;
    padding: 2px;
}
.thanks {

}

</style>

# Guides Index

## Guides Recommended by matrix.org

If you want to... | Then read...
---|---
Understand the CS API | [How to use the client-server API](https://matrix.org/docs/guides/client-server.html)
Get started with the CS API using ... |
... JavaScript | [the README that comes with it](https://github.com/matrix-org/matrix-js-sdk)
... Python | [Matrix Python SDK documentation](http://matrix-org.github.io/matrix-python-sdk/)
See an example of a simple bot | [tiny-matrix-bot source](https://github.com/4nd3r/tiny-matrix-bot)
Install synapse using Docker | [the README that comes with it](https://github.com/matrix-org/synapse/tree/master/docker)

## Guides List

This collection of guides is taken from around the web. If you have used a guide, and recommend it, please go ahead and click "Recommend" on the right, and we'll use this to sort the articles by recommendations.

|

### Introduction for Users

Article | Author | Language | Action
---|---|:---:|:---:
[Guide to matrix.org and riot.im](https://www.snoyman.com/blog/2018/05/guide-to-matrix-riot)|Michael Snoyman|English|
[Riot Matrix from La Foresta](http://laforesta.net/riot-matrix/)|La Foresta team|Italian|

|

### Introduction for Developers

Article | Author | Language | Action
---|---|:---:|:---:
[Enter the Matrix](https://brendan.abolivier.bzh/enter-the-matrix/)|Brendan| English|
[Obtain Access Tokens from Riot](https://t2bot.io/docs/access_tokens/)|TravisR|English|
  
|

### Installing Synapse

Article | Author | Language | Action
---|---|:---:|:---:
[Run your end-to-end encrypted chat server using Matrix and Riot](https://blog.cryptoaustralia.org.au/2017/03/21/run-your-end-to-end-encrypted-chat-server-matrix-riot/)|Gabor Szathmari|English|
[How to Install Matrix Synapse Chat on Ubuntu 18.04 LTS](https://www.howtoforge.com/tutorial/how-to-install-matrix-synapse-on-ubuntu-1804/)|Muhammad Arul|English|
[Create a Chat Server Using Matrix Synapse and Riot on CentOS 7](https://www.vultr.com/docs/create-a-chat-server-using-matrix-synapse-and-riot-on-centos-7)|Vultr Docs|English|
[How to Create a Chat Server Using Matrix Synapse on Ubuntu 16.04](https://www.alibabacloud.com/blog/how-to-create-a-chat-server-using-matrix-synapse-on-ubuntu-16-04_593809)|alibabacloud.com|English|
[How to install Matrix Synapse Home Server](https://www.upcloud.com/support/install-matrix-synapse/)|UpCloud Tutorials|English|
[How To Install Matrix Synapse on Ubuntu 16.04](https://www.digitalocean.com/community/tutorials/how-to-install-matrix-synapse-on-ubuntu-16-04)|Oliver Lumby for DigitalOcean|English|
[Running your own encrypted chat service with Matrix and Riot](https://gist.github.com/attacus/cb5c8a53380ca755b10a5b37a636a0b9)|[github.com/attacus](https://github.com/attacus)|English|
[How to secure your chats with Matrix](https://www.gigenet.com/blog/how-to-secure-your-chats-with-matrix/)|Zachary Muller|English|
[Introduction and tutorials for Riot.im](https://wiki.giveth.io/tutorials/riot-migration/)|[@geleeroyale:matrix.org](https://matrix.to/#/@geleeroyale:matrix.org)|English|
[Install Riot Matrix Chat Client On Debian and Ubuntu](https://linuxconfig.org/install-riot-matrix-chat-client-on-debian-and-ubuntu)|Nick Congleton|English|

## Video Guides

Article | Author | Language | Action
---|---|:---:|:---:
[Matrix Bridging to IRC, Slack and Telegram](https://www.youtube.com/watch?v=ZNEzgYRLj8g)|Jon Spriggs|English|
