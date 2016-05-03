<html>
<head>

<title>[matrix]</title>
<link rel="stylesheet" href="site.css">
<link href="http://matrix.org/matrix.png" rel="image_src" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
    var navTop = $('#nav').offset().top;
    $(window).scroll(function (event) {
        if ($(this).scrollTop() >= navTop) {
            $('#nav').addClass('fixed');
        } else {
            $('#nav').removeClass('fixed');
        }
    });
});
    
</script>

<style type="text/css">
    body {
        font-family: Helvetica, Arial, sans-serif;
    }
    
    #header {
        position: absolute;
    }
    
    #heading1 {
        margin: auto;
        margin-top: 100px;
        margin-bottom: 80px;
        text-align: center;
    }
        
    #tagline {
        text-align: left;
        display: inline-block;
        vertical-align: top;
        margin-top: 20px;
        margin-left: 40px;
        font-size: 27px;
        font-weight: bold;
    }
    
    #nav {
        text-align: center;
        height: 40px;
        line-height: 40px;
        position: absolute;
        width: 100%;
        top: 250px;
        background-color: #fff;
        color: #000;
        -webkit-transition-property: background-color, color;
        -moz-transition-property: background-color, color;
        -o-transition-property: background-color, color;
        transition-property: background-color, color;
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
        transition-duration: 0.5s;
    }
    
    #nav.fixed {
        position: fixed;
        top: 0px;
        width: 100%;
        background-color: #000;
        border-bottom: 1px #888 solid;
        color: #fff;
        -webkit-transition-property: background-color, color;
        -moz-transition-property: background-color, color;
        -o-transition-property: background-color, color;
        transition-property: background-color, color;
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
        transition-duration: 0.5s;
    }
    
    #nav.fixed .navButton {
        color: #fff ! important;
        -webkit-transition-property: color;
        -moz-transition-property: color;
        -o-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
        transition-duration: 0.5s;
    }
    
    .navButton {
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
    }
    
    .navButton:link {
        color: #000;
        -webkit-transition-property: color;
        -moz-transition-property: color;
        -o-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
        transition-duration: 0.5s;
    }
    .navButton:visited {
        color: #000;
        -webkit-transition-property: color;
        -moz-transition-property: color;
        -o-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
        transition-duration: 0.5s;
    }
    .navButton:hover   { color: #fff; background-color: #000; }
    .navButton:active  { color: #888; }

    .section {
        margin: auto;
        max-width: 900px;        
        padding: 40px;
        clear: both;
        font-size: 18px;
    }
    
    #about {
        border-top: #ccc 1px solid;
        border-bottom: #ccc 1px solid;
        background-image: url('img/crosshatch.png');
        font-size: 20px;
    }
    
    #about .section {
        max-width: 700px;
        font-size: 20px;
    }
    
    #try {
        text-align: center;
        background-color: #222;
    }
    
    #try .section {
        font-size: 32px;
    }

    #try a:link    { color: #fff; }
    #try a:visited { color: #fff; }
    #try a:hover   { color: #ccc; }
    #try a:active  { color: #ccc; }
    
    #section2 {
        background-image: url('img/crosshatch.png');
        border-top: #ccc 1px solid;
        border-bottom: #ccc 1px solid;
    }
    
    .section ul {
        margin-top: 0px;
    }
    
    .section li {
        padding: 5px;
    }
    
    .bigColumn {
        width: 500px;
        display: inline-block;
        vertical-align: top;
    }
    
    .smallColumn {
        margin: 30px ! important;
        display: inline-block;
        vertical-align: middle;
    }
    
    #heading1,
    #nav,
    #about,
    #try,
    #heading2,
    #section1,
    #section2,
    #section3,
    #about2
    {
    }
        
    .screenshot {
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
    }
    
    #about2 {
        background-image: url('img/crosshatch.png');
        border-top: #ccc 1px solid;
        border-bottom: #ccc 1px solid;
        /*
        background: -webkit-linear-gradient(#eee, #fff);
        background: -o-linear-gradient(#eee, #fff);
        background: -moz-linear-gradient(#eee, #fff);
        background: linear-gradient(#eee, #fff);
        */
    }
    
    .action {
        display: block;
    }
    
</style>
</head>

<body>    
    <div id="header">
        <div id="headerContent">
            &nbsp;
        </div>
    </div>
    
    <div id="page">
        
    <div id="heading1">
        <img src="img/matrix-anim.gif?q=<?php echo rand() ?>" width="305" height="130" alt="[matrix]"/>
        <div id="tagline">
            A new basis for<br/>
            open, distributed,<br/>
            real-time communication
        </div>
    </div>

    <div id="nav">
<?php include("includes/nav.html");?>
    </div>
    
    <div id="about">
        <div class="section">
            <b>Matrix</b> is a new open standard for interoperable Instant
            Messaging and VoIP, providing pragmatic HTTP APIs and open source
            reference implementations for creating and running your own
            real-time communication infrastructure.
            <br/><br/>
            Our hope is to make VoIP/IM as universal and interoperable as email.
            <br/><br/>
            <div style="text-align: right">
                <a href="#about2">learn more...</a>
            </div>
        </div>
    </div>
    
    <div id="try">
        <div class="section">
            <a href="/alpha">Try <b>matrix</b> now!</a>
        </div>
    </div>
    
    <div id="section1">
        <div class="section">
            <div class="bigColumn">
                <h3>Open APIs</h3>
                <ul>
                    <li>Simple pragmatic <a href="/docs/api">RESTful HTTP/JSON APIs</a></li>
                    <li><a href="/docs/spec">Open specification</a> of the Matrix standard</a></li>
                    <li>Create and manage fully distributed (eventually consistent) conversations with no single points of control or failure</li>
                    <li>Send and receive extensible messages with optional end-to-end encryption</li>
                    <li>WebRTC VoIP/Video calling using Matrix signalling</li>
                    <li>Real-time synchronised history and state across all clients</li>
                    <li>Group conversation by default</li>
                    <li>Use existing 3rd party IDs (e.g. email, phone numbers, Facebook) to authenticate, identify and discover users</li>
                    <li>Trusted federation of identity servers, tracking public keys and 3rd party ID mappings</li>
                    <li>TLS by default</li>
                </ul>
            </div>
            <div class="smallColumn">
                <a href="/docs/api">
                    <img class="screenshot" src="img/apis.png" width="302" height="331" alt="APIs"/>
                </a>
            </div>
        </div>
    </div>
        
    <div id="section2">
        <div class="section">
            <div class="smallColumn">
                <a href="http://github.com/matrix-org/synapse">
                    <img class="screenshot" src="img/code.png" width="302" height="331" alt="code"/>
                </a>
            </div>
            <div class="bigColumn">
                <h3>Reference Open Source Implementations</h3>
                <ul>
                    <li><a href="http://github.com/matrix-org/synapse">synapse</a> - reference Matrix homeserver in Python/Twisted</li>
                    <li><a href="http://github.com/matrix-org/matrix-angular-sdk/tree/master">matrix-angular-sdk</a> - example Matrix client and SDK in AngularJS</li>
                    <li><a href="http://github.com/matrix-org/matrix-ios-sdk/tree/master">matrix-ios-sdk</a> - example Matrix client and SDK for iOS</li>
                    <li><a href="http://github.com/matrix-org/matrix-android-sdk/tree/master">matrix-android-sdk</a> - example Matrix client and SDK for Android/li>
                    <li><a href="http://github.com/matrix-org/synapse/tree/master/cmdclient">synapse cmdclient</a> - example Matrix CLI in Python</li>
                    <li><a href="http://github.com/matrix-org/sydent">sydent</a> - reference Matrix identity server in Python/Twisted)</li>
                    <li><a href="https://metacpan.org/release/Net-Async-Matrix">Net::Async::Matrix</a> - Matrix client SDK for Perl</li>
                    <li>...contributions for other platforms more than welcome!</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="section3">
        <div class="section">        
            <div class="bigColumn">
                <h3>The Matrix Community</h3>
                <ul>
                    <li><a href="http://github.com/matrix-org/synapse">Run a homeserver</a> and join the federation!</li>
                    <li><a href="http://matrix.org/jira">File problems</a> on JIRA</li>
                    <li>Come talk on Matrix at <a href="/alpha">#matrix:matrix.org</a></li>
                    <li>...or find us on IRC at <a href="irc://irc.freenode.net/matrix">#matrix</a> on Freenode</li>
                    <li>Comment on our <a href="/blog">blog</a></li>
                    <li><a href="https://twitter.com/matrixdotorg" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @matrixdotorg</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </li>
                    <li>Go retro and use the <a href="/mailman">mailing list</a></li>
                </ul>
            </div>
            <div class="smallColumn">
                <a href="/alpha">
                    <img class="screenshot" src="img/community.jpg" width="302" height="331" alt="community"/>
                </a>
            </div>
        </div>
    </div>
    
    <div id="about2">
        <div class="section">
            <h2>About</h2>
            <p>
            Matrix.org's goal is to make real-time communication over IP as seamless
            and interoperable as email by providing the world with a new open standard
            which allows communication services themselves to interoperate.
            </p>
            <p>    
            For the end consumer this will mean they can choose to use their
            favourite app because they get the most value from it and trust the
            provider with their data, and still be able to communicate with
            friends using competing apps and services.
            </p>
            <p>
            In practice Matrix specifies a set of pragmatic HTTP JSON APIs
            as an open standard, intended to be implemented on a wide range of
            servers, services and clients, letting developers build messaging and
            VoIP functionality on top of the entirely open Matrix ecosystem rather
            than using closed or proprietary solutions. The hope is for Matrix to
            act as the building blocks for a new generation of fully open and
            interoperable messaging and VoIP apps for the internet.
            </p>
            <p>
            Matrix's APIs provide:
            <ul>
                <li>Creating and managing fully distributed chat rooms with no
                single points of control or failure</li>
                <li>Eventually-consistent cryptographically secure synchronisation
                of room state across a global open network of federated servers and
                services</li>
                <li>Sending and receiving extensible messages in a room with
                (optional) end-to-end encryption (in development)</li>
                <li>Inviting, joining, leaving, kicking, banning room members</li>
                <li>Managing user accounts (registration, login, logout)</li>
                <li>Using 3rd Party IDs (3PIDs) such as email addresses, phone
                numbers, Facebook accounts to authenticate, identify and discover
                users on Matrix.</li>
                <li>Placing 1:1 VoIP and Video calls</li>
            </ul>
            <p>
            In Matrix, every user runs one or more Matrix clients, which connect
            through to a Matrix <i>homeserver</i> which stores all their personal chat
            history and user account information - much as a mail client connects
            through to an IMAP server.  Conversation history is stored on
            all the homeservers who participate in a conversation, for as long as
            the users involved wish to store it.  History can always be pulled in
            from other participants if needed - and if all the participants decide
            not to keep the history, it is by definition lost forever.
            </p>
            <p>
            Just like email, you can either run your
            own Matrix homeserver and control and own your own communications and
            history or use one hosted by someone else (e.g. matrix.org) - there is
            no single point of control or mandatory service provider in Matrix,
            unlike WhatsApp, Facebook, Hangouts, etc.
            </p>
            <p>
            We provide a reference implementation of a Matrix server
            called Synapse, written in Python/Twisted.  The intention is to
            showcase the concept of Matrix, test and demonstrate the spec,
            and let anyone and everyone run their own homeserver and
            generally help bootstrap the ecosystem.
            </p>
            <p>
            We also provide multiple Matrix SDKs and clients:
            <ul>
                <li><a href="http://github.com/matrix-org/matrix-angular-sdk">matrix-angular-sdk</a> for the web</li>
                <li><a href="http://github.com/matrix-org/matrix-ios-sdk">matrix-ios-sdk</a> for iOS</li>
                <li><a href="http://github.com/matrix-org/matrix-android-sdk">matrix-android-sdk</a> for Android</li>
                <li><a href="https://metacpan.org/release/Net-Async-Matrix">Net::Async::Matrix</a> for Perl</li>
                <li><a href="http://github.com/matrix-org/synapse/tree/master/cmdclient">cmdclient</a> for experimentation at the CLI</li>
            </ul>            
            </p>
            Matrix.org's initial inspiration and goal has been to fix the problem of
            fragmented IP communications, but our real potential and ultimate
            mission is to be a new and truly open ecosystem on the Internet enabling
            people, services and devices to easily communicate with each other.
            </p>
            <p>
            We'd like to invite you to take a look at the Matrix <a
            href="/docs/spec">spec</a>, <a href="http://github.com/matrix-org/synapse">run a
            homeserver</a>, <a href="http://matrix.org/beta">join the existing Matrix chatrooms</a> already out
            there, and experiment with the <a href="/docs/api">APIs</a> and the demo
            clients. Please let us know your thoughts on <a href="http://matrix.org/beta">#matrix:matrix.org</a>, <a
            href="/mailman/listinfo/matrix-users">the mailing list</a> or <a
            href="http://twitter.com/@matrixdotorg">@matrixdotorg</a> or <a
            href="http://matrix.org/jira">JIRA</a>.
            </p>
        </div>
    </div>

    </div><!-- page -->

    <div id="footer">
        <div id="footerContent">
            &copy 2014-2015 Matrix.org
        </div>
    </div>
</body>
</html>