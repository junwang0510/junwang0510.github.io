<?php
    $servername = "localhost";
    $username = "dtbsuser";
    $password = "dtbs#passw01";
    $dbname = "dtbsname";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM Counter WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "no results";
    }

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Jun Wang Homepage</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Open+Sans:ital,wght@1,300&family=Roboto+Condensed:wght@300;400&family=Roboto:wght@300&family=Share+Tech+Mono&family=Sigmar&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&family=Open+Sans:ital,wght@1,300&family=Roboto+Condensed:wght@300;400&family=Roboto:wght@300&family=Share+Tech+Mono&family=Sigmar&display=swap" rel="stylesheet">
        <style>
          body {
            margin: 1em auto;
            max-width: 54em;
            font: 1em/1.5 Helvetica;
            font-family: assistant, sans-serif;
          }

          h1, h2, h3 {
            line-height: 1.5;
            font-family: sans-serif;
          }

          div.title {
            font-weight: bold;
          }

          li {
            margin: 1em auto;
            line-height: 1.5;
          }

          img {
            border-radius: 10px;
          }

          .image-container {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-left: 50px;
          }

          .text-container {
            flex: 1;
            text-align: center;
          }

          .larger-icon {
            font-size: 24px;
          }

          #contact-icons a,
          #contact-icons a:visited,
          #contact-icons a:active,
          #contact-icons a:focus {
              color: inherit;
              text-decoration: none;
          }

          #email-display {
              opacity: 0;
              transition: opacity 0.5s ease-in-out;
          }

          #email-display.visible {
              opacity: 1;
          }

          hr {
              border: none;
              border-top: 1px solid #ccc;
              margin: 2em 0;
          }

          .tab {
              cursor: pointer;
              padding: 5px;
              display: inline-block;
              margin: 5px;
              color: white;
              background-color: gray;
              border-radius: 10px;
              text-align: center;
          }

          .tab:hover {
              background-color: #444444;
          }

          .tab.active {
              background-color: rgba(20, 20, 20, 1);
          }

          .tab.active:hover {
              background-color: black;
          }

          .content {
            display: none;
          }

          .content.active {
            display: block;
          }

          footer {
            font-size: small;
          }

          /* vertical space between the lines. */
          #news table tr td {
              padding-top: 10px;
              padding-bottom: 10px;
          }

          /* space between the dates and the emoji. */
          #news table tr td:nth-child(1) {
              margin-right: 20px;
              padding-right: 20px;
          }
        </style>
        <script>
          function showEmail() {
              var emailDiv = document.getElementById("email-display");
              if (emailDiv.childNodes.length === 0) {
                  var emailText = document.createTextNode("Email: junw3@cs.washington.edu");
                  emailDiv.appendChild(emailText);
              }
              emailDiv.classList.toggle("visible");
          }

          function showContent(id) {
              var contents = document.getElementsByClassName('content');
              for(var i = 0; i < contents.length; i++) {
                  contents[i].classList.remove('active');
              }

              var tabs = document.getElementsByClassName('tab');
              for(var i = 0; i < tabs.length; i++) {
                  tabs[i].classList.remove('active');
              }

              document.getElementById(id).classList.add('active');
              document.getElementById(id + '-tab').classList.add('active');
          }

          window.onload = function() {
            showContent('news');
          }
        </script>
    </head>
    <body>
        <div class="image-container">
            <img src="Portrait.jpg" alt="self portrait" width="240" height="240">
            <div class="text-container">
                <h1>Jun Wang &nbsp; 王骏 &nbsp; おうしゅん</h1>
                <p>Computer Science undergraduate @ University of Washington</p>
                <p>Advised by Professor <a href="https://jonfroehlich.github.io/">Jon Froehlich</a></p>
                <p id="contact-icons">
                    <a href="javascript:showEmail()"><i class="fas fa-envelope larger-icon"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="Resume.pdf" target="_blank"><i class="fas fa-file-alt larger-icon"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://github.com/junwang0510"><i class="fab fa-github larger-icon"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://www.linkedin.com/in/junwang0510/"><i class="fab fa-linkedin larger-icon"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com/JunWang75215513"><i class="fab fa-twitter larger-icon"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com/junie_wangy/"><i class="fab fa-instagram larger-icon"></i></a>
                </p>
                <div id="email-display"></div>
            </div>
        </div>
        <p>👋 I'm interested in Human-Computer Interaction (HCI) and Artificial Intelligence (AI). Desiring to improve productivity through innovative interaction methodologies, I focus on designing and evaluating multimodal, human-centered systems that augment people's performance on everyday tasks. I am researching human-centered AI at <a href="https://makeabilitylab.cs.washington.edu/">Makeability Lab</a> and robot learning with <a href="https://duanjiafei.com/">Jiafei Duan</a>.</p>
        <p>🧠 Aside from academics, I enjoy refining card magic routines, crafting <a href="https://www.youtube.com/watch?v=N2aRACTmDS8">cardistry</a> flourishes, inventing Rubik's Cube algorithms, training calisthenics skills, and binge-watching AI podcasts (I recommend <a href="https://www.youtube.com/@lexfridman">Lex Fridman Podcast</a> and <a href="https://www.youtube.com/@TheRobotBrainsPodcast">The Robot Brains Podcast</a>).</p>

        <div class="tab" id="news-tab" onclick="showContent('news')">🌍 <strong>News</strong></div>
        <div class="tab" id="misc-tab" onclick="showContent('misc')">💬 <strong>Misc</strong></div>

        <div id="misc" class="content">
            <h3>Recommendations</h3>
            <ul>
                <li>📚 <strong>Self-Improvement:</strong> <a href="https://www.youtube.com/watch?v=QmOF0crdyRU&list=WL&index=1">Dopamine Control</a>, <a href="https://www.youtube.com/watch?v=-5RCmu-HuTg">12 Rules for Life</a>, <a href="https://www.coursera.org/learn/learning-how-to-learn?utm_medium=sem&utm_source=gg&utm_campaign=B2C_NAMER__coursera_FTCOF__branded-search-country-US-country-CA&campaignid=380484307&adgroupid=67687134864&device=c&keyword=coursera%20learning%20how%20to%20learn&matchtype=b&network=g&devicemodel=&adposition=&creativeid=343697761842&hide_mobile_promo&gclid=CjwKCAjwpayjBhAnEiwA-7ena9lpWYEEDYU9YV1IEItBFMkw-XZGyAIvJjNMwTOLLoMKG103kS7rtxoCAGUQAvD_BwE">Learning How to Learn</a>, <a href="https://www.neelnanda.io/">Neel Nanda's Blogs</a></li>
                <li>✍ <strong>Tech Blogs:</strong> <a href="https://lilianweng.github.io/">Lil'Log</a>, <a href="https://colah.github.io/">colah's blog</a>, <a href="https://distill.pub/">Distill</a>, <a href="http://karpathy.github.io/">Andrej Karpathy blog</a>, <a href="https://dennybritz.com/">Denny's Blog</a>, <a href="https://hai.stanford.edu/news/blog">Stanford HAI</a>, <a href="https://www.ruder.io/">ruder.io</a></li>
                <li>🔩 <strong>Tools:</strong> <a href="https://www.emojisearch.app/">Emoji Search</a>, <a href="https://elicit.org/">Elicit</a></li>
            </ul>
            <h3>Quotes</h3>
            <ul>
                <li><strong>Marcus Tullius Cicero</strong> I criticize by creation, not by finding fault.</li>
                <li><strong>Donald Knuth</strong> Beware of bugs in the above code; I have only proved it correct, not tried it.</li>
                <li><strong>Ralph Waldo Emerson</strong> People wish to be settled; only in so far as they are unsettled is there any hope for them.</li>
                <li><strong>C.S. Lewis</strong> Humility is not thinking less of yourself, it's thinking of yourself less.</li>
            </ul>
        </div>

        <div id="news" class="content">
            <table>
                <tr>
                    <td><strong>July 19, 2023</strong></td>
                    <td>🤞</td>
                    <td>Submitted two demos to <a href="https://uist.acm.org/2023/">UIST 2023</a>.</td>
                </tr>
                <tr>
                    <td><strong>June 20, 2023</strong></td>
                    <td>🎓</td>
                    <td>Began working with <a href="https://duanjiafei.com/">Jiafei Duan</a> from <a href="https://raivn.cs.washington.edu/people.html">RAIVN Lab</a>.</td>
                </tr>
                <tr>
                    <td><strong>May 31, 2023</strong></td>
                    <td>💻</td>
                    <td>Presented at Allen School Masters and Undergraduate Research Showcase.</td>
                </tr>
                <tr>
                    <td><strong>May 20, 2023</strong></td>
                    <td>🏫</td>
                    <td>Presented at UW's <a href="https://www.washington.edu/undergradresearch/symposium/">Undergraduate Research Symposium</a>.</td>
                </tr>
                <tr>
                    <td><strong>May 3, 2023</strong></td>
                    <td>🎓</td>
                    <td>Professor <a href="https://jonfroehlich.github.io/">Jon Froehlich</a> agreed to be my research advisor. Feeling truly blessed!</td>
                </tr>
                <tr>
                    <td><strong>April 5, 2023</strong></td>
                    <td>🤞</td>
                    <td>Submitted a paper to <a href="https://uist.acm.org/2023/">UIST 2023</a>.</td>
                </tr>
                <tr>
                    <td><strong>Nov. 13, 2022</strong></td>
                    <td>🎓</td>
                    <td>Began working with <a href="https://jaewook-lee.com/">Jae Lee</a> from <a href="https://makeabilitylab.cs.washington.edu/">Makeability Lab</a>.</td>
                </tr>
            </table>
        </div>
        <hr>
        <footer>
            Last updated: 2023/07/31<br>
            Unique visitors since August 2023: <?php print $visits; ?> <br>
            &copy; Copyright 2023 Jun Wang
        </footer>
    </body>
</html>