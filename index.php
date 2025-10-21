<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MVC Training</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/dracula.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Slide Counter -->
    <div class="slide-counter" id="slideCounter">1 / 23</div>

    <!-- Main Container -->
    <div class="container">
        <!-- Slide 1: Welcome -->
        <div class="slide active" data-slide="1">
            <div class="slide-content">
                <div class="welcome-screen">
                    <div class="icon-large">
                        <i class="fas fa-desktop"></i>
                        <i class="fas fa-arrow-right"></i>
                        <i class="fas fa-globe"></i>
                    </div>
                    <h1>From Desktop to Web</h1>
                    <p class="subtitle">A practical guide for Refresh VB developers</p>
                    <div class="info-box">
                        <p><i class="fas fa-bullseye"></i> How to write PHP code</p>
                        <p><i class="fas fa-book"></i> How to organize your code with MVC</p>
                        <p><i class="fas fa-folder"></i> Where files go in a web project</p>
                        <p><i class="fas fa-database"></i> How to get and save data</p>
                        <p><i class="fas fa-rocket"></i> Build your first real web feature</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: The Big Difference -->
        <div class="slide" data-slide="2">
            <div class="slide-content">
                <h1>Desktop vs Web</h1>
                <p class="intro-text">Think of it like this...</p>

                <div class="comparison-grid">
                    <div class="comparison-box vb-box">
                        <h3><i class="fas fa-desktop"></i> Your VB World</h3>
                        <div class="analogy-text">
                            <strong>Like a WhatsApp call</strong>
                            <p>Continuous connection, stays active</p>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check"></i> Program stays running in memory</li>
                            <li><i class="fas fa-check"></i> Variables stay the same between actions</li>
                            <li><i class="fas fa-check"></i> Forms stay loaded</li>
                            <li><i class="fas fa-check"></i> One user = one program instance</li>
                        </ul>
                    </div>

                    <div class="comparison-box web-box">
                        <h3><i class="fas fa-globe"></i> Web World</h3>
                        <div class="analogy-text">
                            <strong>Like WhatsApp messages</strong>
                            <p>Send request, get response, forget everything. Repeat.</p>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fas fa-sync"></i> Program runs only when needed</li>
                            <li><i class="fas fa-sync"></i> Variables destroyed after each request</li>
                            <li><i class="fas fa-sync"></i> Pages rebuilt from scratch each time</li>
                            <li><i class="fas fa-sync"></i> Many users = same program files</li>
                        </ul>
                    </div>
                </div>

                <div class="tip-box">
                    <i class="fas fa-lightbulb"></i>
                    Web is "stateless" - It doesn't remember anything between requests. Nothing is saved unless you store it yourself (using sessions, cookies, or a database)
                </div>
            </div>
        </div>

        <!-- Slide 3: Request-Response Cycle -->
        <div class="slide" data-slide="3">
            <div class="slide-content">
                <h1>How Web Actually Works</h1>
                <p class="intro-text">Every page load is a complete round trip</p>

                <div class="flow-diagram">
                    <div class="flow-step">
                        <i class="fas fa-user fa-2x"></i>
                        <div class="step-label">1. You click</div>
                        <small>Browser sends HTTP request</small>
                    </div>
                    <i class="fas fa-arrow-right flow-arrow"></i>
                    <div class="flow-step">
                        <i class="fas fa-server fa-2x"></i>
                        <div class="step-label">2. Web server receives</div>
                        <small>Apache/Nginx handles it</small>
                    </div>
                    <i class="fas fa-arrow-right flow-arrow"></i>
                    <div class="flow-step">
                        <i class="fab fa-php fa-2x"></i>
                        <div class="step-label">3. PHP executes</div>
                        <small>Your code runs</small>
                    </div>
                    <i class="fas fa-arrow-right flow-arrow"></i>
                    <div class="flow-step">
                        <i class="fas fa-database fa-2x"></i>
                        <div class="step-label">4. Database query</div>
                        <small>Fetches data</small>
                    </div>
                </div>

                <div class="return-flow">
                    <i class="fas fa-arrow-left flow-arrow"></i>
                    <span class="return-label">Then everything comes back...</span>
                </div>

                <div class="flow-diagram">
                    <div class="flow-step">
                        <i class="fas fa-database fa-2x"></i>
                        <div class="step-label">5. Data returns</div>
                        <small>Result set from DB</small>
                    </div>
                    <i class="fas fa-arrow-right flow-arrow"></i>
                    <div class="flow-step">
                        <i class="fab fa-php fa-2x"></i>
                        <div class="step-label">6. PHP builds HTML</div>
                        <small>Creates page markup</small>
                    </div>
                    <i class="fas fa-arrow-right flow-arrow"></i>
                    <div class="flow-step">
                        <i class="fas fa-server fa-2x"></i>
                        <div class="step-label">7. Server sends</div>
                        <small>Complete HTML response</small>
                    </div>
                    <i class="fas fa-arrow-right flow-arrow"></i>
                    <div class="flow-step">
                        <i class="fas fa-user fa-2x"></i>
                        <div class="step-label">8. Browser renders</div>
                        <small>You see the page</small>
                    </div>
                </div>

                <div class="note-box">
                    <i class="fas fa-info-circle"></i>
                    <strong>Why this matters:</strong> This happens EVERY time you click or load a page. Understanding this cycle is crucial for web development.
                </div>

                <div class="insight-box">
                    <i class="fas fa-question-circle"></i>
                    <strong>But isn't this complicated?</strong> Actually, it’s simpler than it seems. A desktop app has to be installed on every user’s computer, but one web app can work for thousands of people at the same time using the same code. Starting fresh each time also helps prevent memory problems and makes fixing errors easier.
                </div>
            </div>
        </div>

        <!-- Slide 4: PHP Creates HTML Explained - SIMPLIFIED -->
        <div class="slide" data-slide="4">
            <div class="slide-content">
                <h1>Wait... PHP Creates HTML?</h1>
                <p class="intro-text">What does that actually mean?</p>

                <div class="clarification-box">
                    <h3>You might be thinking:</h3>
                    <p>"Doesn't HTML already exist in files? How can PHP <em>create</em> it?"</p>
                </div>

                <h3 style="margin-top: 32px;">Here's the Simple Truth:</h3>

                <div class="explanation-grid">
                    <div class="explain-box">
                        <h4><i class="fas fa-file-code"></i> HTML Files Exist</h4>
                        <p>Yes, you write .html or .phtml files with HTML code</p>
                        <p class="subtle">These are like templates - the structure is there</p>
                    </div>

                    <div class="explain-box">
                        <h4><i class="fab fa-php"></i> PHP Fills In The Blanks</h4>
                        <p>When someone visits your page, PHP sprinkles in the data</p>
                        <p class="subtle">It builds the final HTML right before sending it</p>
                    </div>
                </div>

                <div class="visual-flow">
                    <div class="flow-item">
                        <div class="flow-label">Your Template File:</div>
                        <div class="code-panel small">
                            <pre><code class="language-html">&lt;h1&gt;Users&lt;/h1&gt;
&lt;p&gt;Hello, [NAME GOES HERE]&lt;/p&gt;</code></pre>
                        </div>
                    </div>

                    <div class="flow-arrow"><i class="fas fa-arrow-down"></i></div>

                    <div class="flow-item">
                        <div class="flow-label">PHP runs and fills it in:</div>
                        <div class="code-panel small">
                            <pre><code class="language-php">&lt;?php $name = "John"; ?&gt;
&lt;h1&gt;Users&lt;/h1&gt;
&lt;p&gt;Hello, &lt;?= $name ?&gt;&lt;/p&gt;</code></pre>
                        </div>
                    </div>

                    <div class="flow-arrow"><i class="fas fa-arrow-down"></i></div>

                    <div class="flow-item">
                        <div class="flow-label">Browser gets pure HTML:</div>
                        <div class="code-panel small browser-view">
                            <pre><code class="language-html">&lt;h1&gt;Users&lt;/h1&gt;
&lt;p&gt;Hello, John&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <div class="best-practice-box">
                    <i class="fas fa-star"></i>
                    <strong>The Key Point:</strong> You write HTML files. PHP adds the dynamic parts. The browser never sees the PHP - it only sees the finished HTML result.
                </div>
            </div>
        </div>

        <!-- Slide 5: Your First PHP -->
        <div class="slide" data-slide="5">
            <div class="slide-content">
                <h1>Your First PHP</h1>
                <p class="intro-text">Let's start simple</p>

                <button class="reveal-btn" data-target="first-php">
                    <i class="fas fa-eye"></i> Show Me The Code
                </button>

                <div id="first-php" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fab fa-php"></i> hello.php</span>
                            <button class="copy-btn" data-code="first-php-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="first-php-code" class="language-php">&lt;?php
    echo "Hello World!";
?&gt;</code></pre>
                    </div>

                    <div class="explanation-box">
                        <h4>What just happened?</h4>
                        <ul>
                            <li><code>&lt;?php ?&gt;</code> = PHP tags (like <code>Imports</code> or <code>Namespace</code> boundaries)</li>
                            <li><code>echo</code> = Output to page (like <code>Console.WriteLine</code> or <code>Response.Write</code>)</li>
                            <li>Every statement ends with <code>;</code> (just like VB when you don't use line continuation)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 6: PHP Variables -->
        <div class="slide" data-slide="6">
            <div class="slide-content">
                <h1>Variables: VB vs PHP</h1>
                <p class="intro-text">Same concept, slightly different syntax</p>

                <div class="side-by-side">
                    <div class="code-comparison">
                        <h3>VB.NET</h3>
                        <div class="code-panel vb-style">
                            <pre><code class="language-vb">' Declare variable
Dim name As String
name = "John"

Dim age As Integer
age = 25</code></pre>
                        </div>
                    </div>

                    <div class="code-comparison">
                        <h3>PHP</h3>
                        <div class="code-panel">
                            <pre><code class="language-php">&lt;?php
// No declaration needed!
$name = "John";

$age = 25;
?&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <div class="key-points">
                    <h4><i class="fas fa-key"></i> Key Differences</h4>
                    <ul>
                        <li>All variables start with <code>$</code></li>
                        <li>No type declaration (PHP figures it out)</li>
                        <li>Use <code>.</code> for string joining, not <code>&</code></li>
                        <li>Comments use <code>//</code> or <code>/* */</code></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Slide 7: HTML + PHP -->
        <div class="slide" data-slide="7">
            <div class="slide-content">
                <h1>Mixing HTML & PHP</h1>
                <p class="intro-text">This is where it gets interesting</p>

                <button class="reveal-btn" data-target="html-php-mix">
                    <i class="fas fa-eye"></i> Show Full Example
                </button>

                <div id="html-php-mix" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> welcome.php</span>
                            <button class="copy-btn" data-code="html-php-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="html-php-code" class="language-php">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;My Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome!&lt;/h1&gt;
    
    &lt;?php
        $name = "John Doe";
        $role = "Admin";
    ?&gt;
    
    &lt;p&gt;Hello, &lt;?php echo $name ?&gt;&lt;/p&gt;
    &lt;p&gt;Your role: &lt;?php echo $role ?&gt;&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 8: Browser vs Source -->
        <div class="slide" data-slide="8">
            <div class="slide-content">
                <h1>What The Browser Actually Sees</h1>
                <p class="intro-text">Plot twist: The browser never sees your PHP!</p>

                <div class="browser-demo">
                    <div class="demo-section">
                        <h3><i class="fas fa-file-code"></i> What You Write</h3>
                        <div class="code-panel">
                            <pre><code class="language-php">&lt;h1&gt;Users&lt;/h1&gt;
&lt;?php
    $users = ["John", "Jane", "Bob"];
    foreach($users as $user) {
        echo "&lt;p&gt;$user&lt;/p&gt;";
    }
?&gt;</code></pre>
                        </div>
                    </div>

                    <div class="arrow-down">
                        <i class="fas fa-arrow-down fa-3x"></i>
                        <span>PHP runs on server</span>
                    </div>

                    <div class="demo-section">
                        <h3><i class="fas fa-browser"></i> What Browser Gets</h3>
                        <div class="code-panel browser-view">
                            <pre><code class="language-html">&lt;h1&gt;Users&lt;/h1&gt;
&lt;p&gt;John&lt;/p&gt;
&lt;p&gt;Jane&lt;/p&gt;
&lt;p&gt;Bob&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>

                <div class="insight-box">
                    <i class="fas fa-lightbulb"></i>
                    <strong>Key Insight:</strong> PHP is gone by the time the browser sees the page. It only gets pure HTML!
                </div>
            </div>
        </div>

        <!-- Slide 9: Building a Form -->
        <div class="slide" data-slide="9">
            <div class="slide-content">
                <h1>Let's Build a Real Form</h1>
                <p class="intro-text">Time to get user input</p>

                <button class="reveal-btn" data-target="form-example">
                    <i class="fas fa-eye"></i> Show Form Code
                </button>

                <div id="form-example" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> login.html</span>
                            <button class="copy-btn" data-code="form-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="form-code" class="language-html">&lt;form method="POST" action="process.php"&gt;
    &lt;label&gt;Username:&lt;/label&gt;
    &lt;input type="text" name="username"&gt;
    
    &lt;label&gt;Password:&lt;/label&gt;
    &lt;input type="password" name="password"&gt;
    
    &lt;button type="submit"&gt;Login&lt;/button&gt;
&lt;/form&gt;</code></pre>
                    </div>

                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fab fa-php"></i> process.php</span>
                            <button class="copy-btn" data-code="process-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="process-code" class="language-php">&lt;?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    echo "Welcome, " . $username;
?&gt;</code></pre>
                    </div>

                    <div class="note-box">
                        <i class="fas fa-info-circle"></i>
                        Notice <code>method="POST"</code>? Let's talk about why...
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 10: GET vs POST -->
        <div class="slide" data-slide="10">
            <div class="slide-content">
                <h1>POST vs GET: What's The Difference?</h1>
                <p class="intro-text">Two ways to send data to the server</p>

                <div class="vs-container">
                    <div class="method-box post-box">
                        <h3><i class="fas fa-envelope"></i> POST</h3>
                        <div class="method-visual">
                            <div class="envelope-icon">
                                <i class="fas fa-envelope-open-text fa-3x"></i>
                                <p>Data hidden in request body</p>
                            </div>
                        </div>
                        <ul class="method-features">
                            <li><i class="fas fa-check"></i> Data NOT visible in URL</li>
                            <li><i class="fas fa-check"></i> More secure</li>
                            <li><i class="fas fa-check"></i> No size limit</li>
                            <li><i class="fas fa-times"></i> Cannot save/share the link</li>
                        </ul>
                        <div class="use-when">
                            <strong>Use for:</strong>
                            <p>Login forms, submitting data, passwords, creating/updating records</p>
                        </div>
                    </div>

                    <div class="method-box get-box">
                        <h3><i class="fas fa-link"></i> GET</h3>
                        <div class="method-visual">
                            <div class="postcard-icon">
                                <i class="fas fa-eye fa-3x"></i>
                                <p>Data visible in URL</p>
                            </div>
                        </div>
                        <ul class="method-features">
                            <li><i class="fas fa-eye"></i> Data visible in URL bar</li>
                            <li><i class="fas fa-exclamation-triangle"></i> Less secure</li>
                            <li><i class="fas fa-ruler"></i> Size limit (~2000 chars)</li>
                            <li><i class="fas fa-check"></i> Can save/share the exact link</li>
                        </ul>
                        <div class="use-when">
                            <strong>Use for:</strong>
                            <p>Search queries, filters, pagination, shareable links</p>
                        </div>
                    </div>
                </div>

                <div class="example-box">
                    <h4>Real URL Example:</h4>
                    <div class="url-example">
                        <code>https://takealot.com/search?query=laptop&category=electronics&min_price=5000</code>
                        <p class="url-explain"><i class="fas fa-arrow-up"></i> This is GET - all search parameters are in the URL. You can copy this link and send it to someone, and they'll see the exact same search results!</p>
                    </div>
                </div>

                <div class="comparison-real-world">
                    <h4>Real World Comparison:</h4>
                    <div class="comparison-row">
                        <div class="real-example">
                            <strong>GET Example:</strong>
                            <p>Takealot search - you want to share your search results with a colleague</p>
                            <code>takealot.com/search?query=monitor</code>
                        </div>
                        <div class="real-example">
                            <strong>POST Example:</strong>
                            <p>Banking login - you definitely don't want your password in the URL!</p>
                            <code>nedbank.co.za/login</code> (credentials sent securely in POST)
                        </div>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fas fa-shield-alt"></i>
                    <strong>Security Rule:</strong> Never send passwords or sensitive data via GET. Anyone can see the URL - in browser history, server logs, over someone's shoulder!
                </div>
            </div>
        </div>

        <!-- Slide 11: Section Transition - MVC -->
        <div class="slide" data-slide="11">
            <div class="slide-content">
                <div class="section-transition">
                    <i class="fas fa-sitemap fa-5x"></i>
                    <h1>Understanding MVC</h1>
                    <p class="subtitle">Model - View - Controller</p>
                    <!-- <div class="transition-note">
                        <p>Time to organize our code like professionals</p>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Slide 12: What is MVC -->
        <div class="slide" data-slide="12">
            <div class="slide-content">
                <h1>What Is MVC?</h1>
                <p class="intro-text">A way to keep your code from getting messy</p>

                <div class="mvc-grid">
                    <div class="mvc-card view-card">
                        <i class="fas fa-eye fa-3x"></i>
                        <h3>VIEW</h3>
                        <p class="role">What the user sees</p>
                        <ul class="responsibilities">
                            <li>HTML templates</li>
                            <li>Forms & tables</li>
                            <li>Display only!</li>
                        </ul>
                        <div class="analogy">
                            <strong>Like:</strong> Restaurant menu
                        </div>
                    </div>

                    <div class="mvc-card controller-card">
                        <i class="fas fa-traffic-light fa-3x"></i>
                        <h3>CONTROLLER</h3>
                        <p class="role">The coordinator</p>
                        <ul class="responsibilities">
                            <li>Handles requests</li>
                            <li>Business logic</li>
                            <li>Coordinates everything</li>
                        </ul>
                        <div class="analogy">
                            <strong>Like:</strong> The waiter
                        </div>
                    </div>

                    <div class="mvc-card model-card">
                        <i class="fas fa-database fa-3x"></i>
                        <h3>MODEL</h3>
                        <p class="role">Data handler</p>
                        <ul class="responsibilities">
                            <li>Database queries</li>
                            <li>Data validation</li>
                            <li>Returns data</li>
                        </ul>
                        <div class="analogy">
                            <strong>Like:</strong> The kitchen
                        </div>
                    </div>
                </div>

                <div class="why-box">
                    <h4><i class="fas fa-question-circle"></i> Why separate these?</h4>
                    <ul>
                        <li><strong>Organization:</strong> Easy to find things</li>
                        <li><strong>Reusability:</strong> Use same Model in different places</li>
                        <li><strong>Teamwork:</strong> Designer works on Views, you work on Controllers</li>
                        <li><strong>Maintenance:</strong> Change one part without breaking others</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Slide 13: MVC Flow -->
        <div class="slide" data-slide="13">
            <div class="slide-content">
                <h1>How MVC Works Together</h1>
                <p class="intro-text">Follow the journey of a click</p>

                <div class="mvc-flow">
                    <div class="flow-step">
                        <div class="step-number">1</div>
                        <i class="fas fa-mouse-pointer fa-2x"></i>
                        <p>User clicks "Show Users"</p>
                    </div>
                    <i class="fas fa-arrow-down flow-arrow"></i>
                    <div class="flow-step">
                        <div class="step-number">2</div>
                        <i class="fas fa-route fa-2x"></i>
                        <p>URL: /users</p>
                    </div>
                    <i class="fas fa-arrow-down flow-arrow"></i>
                    <div class="flow-step highlight-step">
                        <div class="step-number">3</div>
                        <i class="fas fa-traffic-light fa-2x"></i>
                        <p><strong>CONTROLLER</strong><br>Users.php → indexAction()</p>
                    </div>
                    <i class="fas fa-arrow-down flow-arrow"></i>
                    <div class="flow-step highlight-step">
                        <div class="step-number">4</div>
                        <i class="fas fa-database fa-2x"></i>
                        <p><strong>MODEL</strong><br>User.php → getAll()</p>
                    </div>
                    <i class="fas fa-arrow-down flow-arrow"></i>
                    <div class="flow-step">
                        <div class="step-number">5</div>
                        <i class="fas fa-server fa-2x"></i>
                        <p>Database returns user list</p>
                    </div>
                    <i class="fas fa-arrow-down flow-arrow"></i>
                    <div class="flow-step highlight-step">
                        <div class="step-number">6</div>
                        <i class="fas fa-eye fa-2x"></i>
                        <p><strong>VIEW</strong><br>index.phtml displays table</p>
                    </div>
                    <i class="fas fa-arrow-down flow-arrow"></i>
                    <div class="flow-step">
                        <div class="step-number">7</div>
                        <i class="fas fa-user fa-2x"></i>
                        <p>User sees the page!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 14: Our Framework Structure -->
        <div class="slide" data-slide="14">
            <div class="slide-content">
                <h1>Your MVC-SHELL Framework</h1>
                <p class="intro-text">Focus only on the <strong>app</strong> folder</p>

                <div class="folder-visual">
                    <style>
                        .tree-line {
                            position: relative;
                            padding-left: 20px;
                        }

                        .tree-line::before {
                            content: '';
                            position: absolute;
                            left: 0;
                            top: 0;
                            bottom: 0;
                            width: 1px;
                            background: linear-gradient(to bottom, #999, #999);
                            background-size: 1px 20px;
                        }

                        .tree-connector {
                            display: inline-block;
                            width: 12px;
                            height: 1px;
                            background: #999;
                            margin-right: 8px;
                            vertical-align: middle;
                            position: relative;
                        }

                        .tree-connector::before {
                            content: '';
                            position: absolute;
                            left: -6px;
                            top: -5px;
                            width: 1px;
                            height: 6px;
                            background: #999;
                        }

                        .folder-tree {
                            font-family: monospace;
                            line-height: 1.8;
                        }
                    </style>

                    <div class="folder-tree">
                        <div class="folder-item root">
                            <i class="fas fa-folder-open"></i> mvc-shell/
                        </div>

                        <div style="margin-left: 30px;">
                            <div class="folder-item important">
                                <span class="tree-connector"></span><i class="fas fa-folder"></i> <strong>app/</strong>
                                <span class="badge">← YOU WORK HERE</span>
                            </div>

                            <div style="margin-left: 30px;" class="tree-line">
                                <div class="folder-item">
                                    <span class="tree-connector"></span><i class="fas fa-folder"></i> Controllers/
                                    <div class="folder-desc">Your business logic</div>
                                </div>

                                <div class="folder-item">
                                    <span class="tree-connector"></span><i class="fas fa-folder"></i> Models/
                                    <div style="margin-left: 30px;" class="tree-line">
                                        <div class="folder-item">
                                            <span class="tree-connector"></span><i class="fas fa-folder"></i> Tables/
                                            <div class="folder-desc">Database stuff</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="folder-item">
                                    <span class="tree-connector"></span><i class="fas fa-folder"></i> Views/
                                    <div class="folder-desc">HTML templates</div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-left: 30px;">
                            <div class="folder-item ignore">
                                <span class="tree-connector"></span><i class="fas fa-folder"></i> Core/
                                <span class="badge ignore-badge">← IGNORE</span>
                            </div>

                            <div class="folder-item ignore">
                                <span class="tree-connector"></span><i class="fas fa-folder"></i> Library/
                                <span class="badge ignore-badge">← IGNORE</span>
                            </div>
                        </div>

                        <div style="margin-left: 30px;">
                            <div class="folder-item">
                                <span class="tree-connector"></span><i class="fas fa-folder"></i> public/
                            </div>

                            <div style="margin-left: 30px;" class="tree-line">
                                <div class="folder-item">
                                    <span class="tree-connector"></span><i class="fas fa-file"></i> index.php
                                    <div class="folder-desc">Front door (routes everything)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="front-door-box">
                    <i class="fas fa-door-open"></i>
                    <h4>About that index.php file...</h4>
                    <p>This is where every request starts. It checks the URL and directs it to the right controller.</p>
                    <p class="subtle">You usually don’t need to touch this file, it runs everything in the background.</p>
                </div>
            </div>
        </div>

        <!-- Slide 15: Looking at Existing Users Code -->
        <div class="slide" data-slide="15">
            <div class="slide-content">
                <h1>Real Example: The Users Module</h1>
                <p class="intro-text">Let's see how it's already done in our framework</p>

                <div class="file-preview">
                    <div class="file-tab active">
                        <i class="fas fa-database"></i> Model: User.php
                    </div>
                </div>

                <button class="reveal-btn" data-target="users-model">
                    <i class="fas fa-eye"></i> Show Model Code
                </button>

                <div id="users-model" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> app/Models/Tables/User.php</span>
                            <button class="copy-btn" data-code="model-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="model-code" class="language-php">&lt;?php
namespace App\Models\Tables;

class User extends \Core\Model {
    
    public function __construct() {
        $this->tableName = 'user';
        parent::__construct();
    }
    
    // Parent class gives us:
    // getAll(), getRow(), autoExecute(), delete()
}</code></pre>
                    </div>

                    <div class="explanation-box">
                        <h4>What's happening here?</h4>
                        <ul>
                            <li><code>namespace</code> = Organizing code (like folders)</li>
                            <li><code>extends \Core\Model</code> = Inherit database methods</li>
                            <li><code>tableName</code> = Which table this model uses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 16: Users Controller -->
        <div class="slide" data-slide="16">
            <div class="slide-content">
                <h1>Users Controller Example</h1>
                <p class="intro-text">The coordinator between Model and View</p>

                <button class="reveal-btn" data-target="users-controller">
                    <i class="fas fa-eye"></i> Show Controller Code
                </button>

                <div id="users-controller" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> app/Controllers/Users.php</span>
                            <button class="copy-btn" data-code="controller-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="controller-code" class="language-php">&lt;?php
namespace App\Controllers;

class Users extends \Core\Controller {
    
    public function indexAction() {
        // 1. Get the Model
        $usrs = new \App\Models\Tables\User();
        
        // 2. Get data from database
        $query = "SELECT * FROM user ORDER BY user_description";
        $userList = $usrs->getAll($query);
        
        // 3. Pass to View
        $this->view->userList = $userList;
        
        // 4. View loads automatically: 
        //    app/Views/Users/index.phtml
    }
    
    public function createAction() {
        // Check if form submitted
        if ($this->getRequest()->isPost()) {
            // Get form data
            $params = $this->getAllParams();
            
            // Save to database...
            // Redirect back to list...
        }
        // Show create form
    }
}</code></pre>
                    </div>

                    <div class="vb-comparison">
                        <h4><i class="fas fa-code"></i> VB Comparison</h4>
                        <p><code>indexAction()</code> = Like your <code>Form_Load()</code> event</p>
                        <p><code>createAction()</code> = Like your <code>btnCreate_Click()</code> event</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 17: Users View -->
        <div class="slide" data-slide="17">
            <div class="slide-content">
                <h1>Users View Example</h1>
                <p class="intro-text">Displaying the data to users</p>

                <button class="reveal-btn" data-target="users-view">
                    <i class="fas fa-eye"></i> Show View Code
                </button>

                <div id="users-view" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> app/Views/Users/index.phtml</span>
                            <button class="copy-btn" data-code="view-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="view-code" class="language-php">&lt;div class="container"&gt;
    &lt;h2&gt;User Management&lt;/h2&gt;
    
    &lt;a href="/users/create" class="btn"&gt;Add New User&lt;/a&gt;
    
    &lt;table class="table"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Email&lt;/th&gt;
                &lt;th&gt;Role&lt;/th&gt;
                &lt;th&gt;Actions&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;?php foreach($this->userList as $user): ?&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;?= $user['user_description'] ?&gt;&lt;/td&gt;
                &lt;td&gt;&lt;?= $user['email'] ?&gt;&lt;/td&gt;
                &lt;td&gt;&lt;?= $user['role_description'] ?&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;a href="/users/update/id/&lt;?= $user['id'] ?&gt;"&gt;
                        Edit
                    &lt;/a&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;?php endforeach; ?&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
                    </div>

                    <div class="explanation-box">
                        <h4>Key Points:</h4>
                        <ul>
                            <li><code>$this->userList</code> = Data from Controller</li>
                            <li><code>foreach</code> = Loop through each user</li>
                            <li><code>&lt;?= ?&gt;</code> = Shortcut for echo</li>
                            <li>A View is just HTML with PHP here and there!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 18: Section Transition - Build Province -->
        <div class="slide" data-slide="18">
            <div class="slide-content">
                <div class="section-transition">
                    <i class="fas fa-hammer fa-5x"></i>
                    <h1>Let's Build Something!</h1>
                    <p class="subtitle">Province CRUD Module</p>
                    <div class="transition-note">
                        <p>Time to create our own MVC from scratch</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 19: Province Model -->
        <div class="slide" data-slide="19">
            <div class="slide-content">
                <h1>Step 1: Create Province Model</h1>
                <p class="intro-text">Let's handle the database stuff first</p>

                <div class="file-location">
                    <i class="fas fa-folder-open"></i>
                    Create file: <code>app/Models/Tables/Province.php</code>
                </div>

                <button class="reveal-btn" data-target="province-model">
                    <i class="fas fa-eye"></i> Show Province Model
                </button>

                <div id="province-model" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> Province.php</span>
                            <button class="copy-btn" data-code="province-model-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="province-model-code" class="language-php">&lt;?php
namespace App\Models\Tables;

class Province extends \Core\Model {
    
    public function __construct() {
        $this->tableName = 'province';
        parent::__construct();
    }
    
    // That's it! 
    // Parent gives us: getAll(), getRow(), 
    // autoExecute(), delete()
}</code></pre>
                    </div>

                    <div class="success-box">
                        <i class="fas fa-check-circle"></i>
                        <strong>Done!</strong> Simple, right? The framework does the heavy lifting.
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 20: Province Controller -->
        <div class="slide" data-slide="20">
            <div class="slide-content">
                <h1>Step 2: Create Province Controller</h1>
                <p class="intro-text">The coordinator for our provinces</p>

                <div class="file-location">
                    <i class="fas fa-folder-open"></i>
                    Create file: <code>app/Controllers/Provinces.php</code>
                </div>

                <button class="reveal-btn" data-target="province-controller">
                    <i class="fas fa-eye"></i> Show Full Controller
                </button>

                <div id="province-controller" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> Provinces.php</span>
                            <button class="copy-btn" data-code="province-controller-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="province-controller-code" class="language-php">&lt;?php
namespace App\Controllers;

class Provinces extends \Core\Controller {
    
    // Show all provinces
    public function indexAction() {
        $provinceModel = new \App\Models\Tables\Province();
        $query = "SELECT * FROM province ORDER BY province_name";
        $this->view->provinces = $provinceModel->getAll($query);
    }
    
    // Create new province
    public function createAction() {
        if ($this->getRequest()->isPost()) {
            $params = $this->getAllParams();
            
            $data = [
                'name' => $params['name'],
                'code' => strtoupper($params['code'])
            ];
            
            $provinceModel = new \App\Models\Tables\Province();
            $provinceModel->autoExecute(
                'provinces', 
                $data, 
                DB_AUTOQUERY_INSERT
            );
            
            $this->redirect('/provinces');
        }
    }
    
    // Update existing province
    public function updateAction() {
        $id = $this->params['id'];
        
        if ($this->getRequest()->isPost()) {
            $params = $this->getAllParams();
            
            $data = [
                'name' => $params['name'],
                'code' => strtoupper($params['code'])
            ];
            
            $provinceModel = new \App\Models\Tables\Province();
            $provinceModel->autoExecute(
                'provinces', 
                $data, 
                DB_AUTOQUERY_UPDATE,
                "id = '$id'"
            );
            
            $this->redirect('/provinces');
        }
        
        // Load existing data for form
        $provinceModel = new \App\Models\Tables\Province();
        $query = "SELECT * FROM province WHERE id = ?";
        $this->view->province = $provinceModel->getRow($query, [$id]);
    }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 21: Province Views -->
        <div class="slide" data-slide="21">
            <div class="slide-content">
                <h1>Step 3: Create Province Views</h1>
                <p class="intro-text">We need two view files: one for list, one for forms</p>

                <div class="tabs-container">
                    <button class="tab-btn active" data-tab="list-view">List View</button>
                    <button class="tab-btn" data-tab="form-view">Form View</button>
                </div>

                <div id="list-view" class="tab-content active">
                    <div class="file-location">
                        <i class="fas fa-folder-open"></i>
                        Create: <code>app/Views/Provinces/index.phtml</code>
                    </div>

                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> index.phtml</span>
                            <button class="copy-btn" data-code="list-view-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="list-view-code" class="language-php">&lt;div class="container"&gt;
    &lt;h2&gt;Province Management&lt;/h2&gt;
    
    &lt;a href="/provinces/create" class="btn btn-primary"&gt;Add Province&lt;/a&gt;
    
    &lt;table class="table"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Code&lt;/th&gt;
                &lt;th&gt;Actions&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;?php foreach($this->provinces as $prov): ?&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;?= $prov['name'] ?&gt;&lt;/td&gt;
                &lt;td&gt;&lt;?= $prov['code'] ?&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;a href="/provinces/update/id/&lt;?= $prov['id'] ?&gt;" 
                       class="btn btn-sm btn-warning"&gt;
                        Edit
                    &lt;/a&gt;
                    &lt;a href="/provinces/delete/id/&lt;?= $prov['id'] ?&gt;" 
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Are you sure?')"&gt;
                        Delete
                    &lt;/a&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;?php endforeach; ?&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>

                <div id="form-view" class="tab-content">
                    <div class="file-location">
                        <i class="fas fa-folder-open"></i>
                        Create: <code>app/Views/Provinces/create.phtml</code> & <code>update.phtml</code>
                    </div>

                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> create.phtml / update.phtml</span>
                            <button class="copy-btn" data-code="form-view-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="form-view-code" class="language-php">&lt;div class="container"&gt;
    &lt;h2&gt;&lt;?= isset($this->province) ? 'Edit' : 'Add' ?&gt; Province&lt;/h2&gt;
    
    &lt;form method="POST" action=""&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="name"&gt;Province Name:&lt;/label&gt;
            &lt;input type="text" 
                   class="form-control" 
                   id="name" 
                   name="name" 
                   value="&lt;?= $this->province['name'] ?? '' ?&gt;" 
                   required&gt;
        &lt;/div&gt;
        
        &lt;div class="form-group"&gt;
            &lt;label for="code"&gt;Province Code:&lt;/label&gt;
            &lt;input type="text" 
                   class="form-control" 
                   id="code" 
                   name="code" 
                   value="&lt;?= $this->province['code'] ?? '' ?&gt;" 
                   maxlength="3" 
                   required&gt;
            &lt;small class="form-text text-muted"&gt;
                E.g., GP for Gauteng, WC for Western Cape
            &lt;/small&gt;
        &lt;/div&gt;
        
        &lt;button type="submit" class="btn btn-primary"&gt;Save&lt;/button&gt;
        &lt;a href="/provinces" class="btn btn-secondary"&gt;Cancel&lt;/a&gt;
    &lt;/form&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>

                <div class="info-box" style="margin-top: 20px;">
                    <i class="fas fa-info-circle"></i>
                    <strong>Note:</strong> We're using plain HTML forms here - no JavaScript needed for basic functionality!
                </div>
            </div>
        </div>

        <!-- Slide 22: Complete CRUD Operations -->
        <div class="slide" data-slide="22">
            <div class="slide-content">
                <h1>Complete CRUD Operations</h1>
                <p class="intro-text">Let's add Delete to complete our module</p>

                <button class="reveal-btn" data-target="delete-action">
                    <i class="fas fa-eye"></i> Show Delete Action
                </button>

                <div id="delete-action" class="hidden-content">
                    <div class="code-panel">
                        <div class="code-header">
                            <span><i class="fas fa-file-code"></i> Add to Provinces Controller</span>
                            <button class="copy-btn" data-code="delete-code">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <pre><code id="delete-code" class="language-php">// Delete province
public function deleteAction() {
    $id = $this->getAllParams()['id'];
    
    if ($id) {
        $provinceModel = new \App\Models\Tables\Province();
        $provinceModel->delete("id = '$id'");
    }
    
    $this->redirect('/provinces');
}</code></pre>
                    </div>

                    <div class="crud-summary">
                        <h4>You now have a complete CRUD module!</h4>
                        <div class="crud-grid">
                            <div class="crud-item">
                                <i class="fas fa-plus-circle"></i>
                                <strong>Create</strong>
                                <p>Add new provinces</p>
                            </div>
                            <div class="crud-item">
                                <i class="fas fa-eye"></i>
                                <strong>Read</strong>
                                <p>View all provinces</p>
                            </div>
                            <div class="crud-item">
                                <i class="fas fa-edit"></i>
                                <strong>Update</strong>
                                <p>Edit existing provinces</p>
                            </div>
                            <div class="crud-item">
                                <i class="fas fa-trash"></i>
                                <strong>Delete</strong>
                                <p>Remove provinces</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="tip-box">
                    <i class="fas fa-rocket"></i>
                    <strong>What's Next?</strong> Try building a Cities module that links to Provinces. You've got the pattern now!
                </div> -->
            </div>
        </div>

        <!-- Slide 23: Final Summary -->
        <div class="slide" data-slide="23">
            <div class="slide-content">
                <div class="summary-screen">
                    <h1>You Made It!</h1>
                    <div class="trophy-icon">
                        <i class="fas fa-trophy fa-5x"></i>
                    </div>

                    <div class="learned-grid">
                        <div class="learned-item">
                            <i class="fas fa-desktop fa-2x"></i>
                            <h4>Desktop vs Web</h4>
                            <p>Continuous vs Stateless</p>
                        </div>
                        <div class="learned-item">
                            <i class="fab fa-php fa-2x"></i>
                            <h4>PHP Basics</h4>
                            <p>Variables, Forms, GET/POST</p>
                        </div>
                        <div class="learned-item">
                            <i class="fas fa-sitemap fa-2x"></i>
                            <h4>MVC Pattern</h4>
                            <p>Model, View, Controller</p>
                        </div>
                        <div class="learned-item">
                            <i class="fas fa-folder fa-2x"></i>
                            <h4>Framework Structure</h4>
                            <p>Where everything goes</p>
                        </div>
                    </div>

                    <div class="next-steps">
                        <h3>What's Next?</h3>
                        <ul>
                            <li><i class="fas fa-book"></i> Take your formal PHP course</li>
                            <li><i class="fas fa-code"></i> Practice by building more CRUD modules</li>
                            <li><i class="fas fa-project-diagram"></i> Start migrating the Refresh+ system</li>
                            <li><i class="fas fa-users"></i> Ask your teammates for help - you're not alone!</li>
                        </ul>
                    </div>

                    <div class="remember-box">
                        <i class="fas fa-heart"></i>
                        <p><strong>Remember:</strong> You already know how to code. This is just a new way to organize it. The logic is the same, just the structure is different!</p>
                    </div>

                    <div class="thanks">
                        <h2>Questions?</h2>
                        <p>Now's the time to ask - no question is too simple!</p>
                        <!-- <div class="contact-info">
                            <p><i class="fas fa-envelope"></i> Keep this presentation handy</p>
                            <p><i class="fas fa-book-open"></i> Reference it while coding</p>
                            <p><i class="fas fa-hands-helping"></i> Help each other out</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="nav-bar">
        <button class="nav-btn" id="prevBtn">
            <i class="fas fa-chevron-left"></i> Previous
        </button>
        <span class="nav-counter" id="navCounter">1 / 23</span>
        <button class="nav-btn" id="nextBtn">
            Next <i class="fas fa-chevron-right"></i>
        </button>
        <button class="nav-btn restart-btn" id="restartBtn">
            <i class="fas fa-redo"></i> Restart
        </button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/php.min.js"></script>
    <script src="script.js"></script>
</body>

</html>