<!DOCTYPE html>
<html>
<title>Technical Documentation Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://birchtreedev.com/supportfiles/btd-style.css">
<link rel="stylesheet" href="td-style.css">
<body>

<!----------------------------------------------------------->
<!-- This section is for the header                        -->
<?php readfile("https://birchtreedev.com/includes/btd-nav.php"); ?>
<!----------------------------------------------------------->

<dev id="box-container" class="btd-content btd-padding responsive" style="max-width:1564px"> <!-- box-container arranges nav on right and main content on left -->
<!-- Page content -->
<div id="box-1"> <!-- Puts header on right for large screens -->
<header id="header">
    <div class="btd-padding-48">

        <nav id="nav-bar">
            <header><h1> Liquid Language </h1></header>
            <h4>
                <ul class="ul-nobullet btd-padding">
                    <li class="li-inline"><a class="nav-link" href="#introduction">Introduction</a></li>
                    <li class="li-inline"><a class="nav-link" href="#objects">Objects</a></li>
                    <li class="li-inline"><a class="nav-link" href="#operators">Operators</a></li>
                    <li class="li-inline"><a class="nav-link" href="#tags">Tags</a></li>
                    <li class="li-inline"><a class="nav-link" href="#variabletags">Variable Tags</a></li>
                    <li class="li-inline"><a class="nav-link" href="#filters">Filters</a></li>
                </ul>
            </h4>
        </nav>
        
    </div>
</header>
</div>

<div id="box-2"> <!-- Puts main content on right for large screens -->
<main id="main-doc" class="">
<section  id="introduction" class="main-section responsive">
    <div class="btd-padding-48">
        <header><h2>
            Introduction
        </h2></header>
        <br><p>Liquid is an open-source template language created by Shopify and written in Ruby. It is the backbone of Shopify themes and is used to load dynamic content on storefronts. </p>
        <br><p>Liquid has been in production use at Shopify since 2006 and is now used by many other hosted web applications.</p>
        <p>Liquid code can be categorized into objects, tags, and filters.</p>
    </div>
</section>

<section id="objects" class="main-section responsive">
    <div class="btd-padding-16">
        <header><h2>
            Objects
        </h2></header>
        <p>
            Objects tell Liquid where to show content on a page. Objects and variable names are denoted by double curly braces: <span class="btd-cyan">{{</span> and <span class="btd-cyan">}}</span>.
        </p>
        <p><span class="btd-cyan"><strong>Input</strong></span></p>
        <code class="btd-cyan">{{ page.title }}</code>
        <p><span class="btd-cyan"><strong>Output</strong></span></p>
        <code class="btd-cyan">Introduction</code>
        <p>In this case, Liquid is rendering the content of an object called <span class="btd-cyan">page.title</span>, and that object contains the text <span class="btd-cyan">Introduction</span>.</p>
    </div>
</section>

<section id="operators" class="main-section responsive">
    <div class="btd-padding-16">
        <header><h2>
            Operators
        </h2></header>
        <p>
            Liquid operators includes many logical and comparison elements.
        </p>
        
        <table style="width:100%">
            <tr>
                <td><span class="btd-cyan">==</span></td>
                <td><span class="btd-cyan">equals</span></td>
            </tr>
            <tr>
                <td></th><span class="btd-cyan">!=</span></td>
                <td><span class="btd-cyan">not equal</span></td>
            </tr>
            <tr>
                <td></th><span class="btd-cyan">></span></td>
                <td><span class="btd-cyan">greater than</span></td>
            </tr>
            <tr>
                <td></th><span class="btd-cyan"><</span></td>
                <td><span class="btd-cyan">less than</span></td>
            </tr>
            <tr>
                <td></th><span class="btd-cyan">>=</span></td>
                <td><span class="btd-cyan">greater than or equal to</span></td>
            </tr>
            <tr>
                <td></th><span class="btd-cyan"><=</span></td>
                <td><span class="btd-cyan">less than or equal to</span></td>
            </tr>
            <tr>
                <td></th><span class="btd-cyan">or</span></td>
                <td><span class="btd-cyan">logical or</span></td>
            </tr>
            <tr>
                <td></th><span class="btd-cyan">and</span></td>
                <td><span class="btd-cyan">logical and</span></td>
            </tr>
        </table>
        
        <p> This example uses the equals operator.</p>
        <code class="btd-cyan">{% if product.title == "Awesome Shoes" %}</code>
        <br><code class="btd-cyan">These shoes are awesome!</code>
        <br><code class="btd-cyan">{% endif %}</code>

        <p> This example can use multiple operators.</p>
        <code class="btd-cyan">{% if product.type == "Shirt" or product.type == "Shoes" %}</code>
        <br><code class="btd-cyan">This is a shirt or a pair of shoes.</code>
        <br><code class="btd-cyan">{% endif %}</code>

        <p> This example contains checks for the presence of a substring inside a string.</p>
        <code class="btd-cyan">{% if product.title contains "Pack" %}</code>
        <br><code class="btd-cyan">This product's title contains the word Pack.</code>
        <br><code class="btd-cyan">{% endif %}</code>


    </div>
</section>

<section id="tags" class="main-section responsive">
    <div class="btd-padding-16">
        <header><h2>
            Tags
        </h2></header>
        <p>
            Tags create the logic and control flow for templates. They are denoted by curly braces and percent signs: <span class="btd-cyan">{%</span> and <span class="btd-cyan">%}</span>. </p>
        <p>
            The markup used in tags does not produce any visible text. This means that you can assign variables and create conditions and loops without showing any of the Liquid logic on the page.
        </p>
        <p><span class="btd-cyan"><strong>Input</strong></span></p>
        <code class="btd-cyan">{% if user %}</code>
        <br><code class="btd-cyan">Hello {{ user.name }}!</code>
        <br><code class="btd-cyan">{% endif %}</code>
        <p><span class="btd-cyan"><strong>Output</strong></span></p>
        <code class="btd-cyan">Hello John!</code>
        <p>Tags can be categorized into three types:</p>
        <ul>
            <li>Comment</li>
            <li>Control flow</li>
            <li>Iteration</li>
            <li>Variable assignments</li>
            <li>Raw</li>
            <li>Variable</li>
        </ul>
        <p>You can read more about each type of tag in their respective sections.</p>
    </div>
</section>


<section id="variabletags" class="main-section responsive">
    <div class="btd-padding-16">
        <header><h2>
            Vairable Tags
        </h2></header>
        <p>
            Variable Tags also create the logic and control flow for templates. They do this by creating new Liquid variables.</p>
        <p>This example below creates a new variable.</p>
        <p><span class="btd-cyan"><strong>Input</strong></span></p>
        <code class="btd-cyan">{% assign my_variable = false %}</code>
        <br><code class="btd-cyan">{% if my_variable != true %}</code>
        <br><code class="btd-cyan">This statement is valid.</code>
        <br><code class="btd-cyan">{% endif %}</code>
        
        <p><span class="btd-cyan"><strong>Output</strong></span></p>
        <code class="btd-cyan">This statement is valid.</code>

        <p>This example wraps a variable value in quotations " to save it as a string.</p>
        <p><span class="btd-cyan"><strong>Input</strong></span></p>
        <code class="btd-cyan">{% assign foo = "bar" %}</code>
        <br><code class="btd-cyan">{{ foo }}</code>

        <p><span class="btd-cyan"><strong>Output</strong></span></p>
        <code class="btd-cyan">bar</code>

        <p>This example captures the string inside of the opening and closing tags and assigns it to a variable. Variables created through <code class="btd-cyan">capture</code> are strings.</p>
        <p><span class="btd-cyan"><strong>Input</strong></span></p>
        <code class="btd-cyan">{% assign favorite_food = "pizza" %}</code>
        <br><code class="btd-cyan">{% assign age = 35 %}</code>
        <br><br><code class="btd-cyan">{% capture about_me %}</code>
        <br><code class="btd-cyan">I am {{ age }} and my favorite food is {{ favorite_food }}</code>
        <br><code class="btd-cyan">{% endcapture %}</code>
        <br><br><code class="btd-cyan">{{ about_me }}</code>

        <p><span class="btd-cyan"><strong>Output</strong></span></p>
        <code class="btd-cyan">I am 35 and my favourite food is pizza.</code>
    </div>
</section>

<section id="filters" class="main-section responsive">
    <div class="btd-padding-16">
        <header><h2>
            Filters
        </h2></header>
        <p>
            Filters change the output of a Liquid object. They are used within an output and are separated by a <span class="btd-cyan">|</span>.</p>
        <p><span class="btd-cyan"><strong>Input</strong></span></p>
        <code class="btd-cyan">{{ "/my/fancy/url" | append: ".html" }}</code>
        <p><span class="btd-cyan"><strong>Output</strong></span></p>
        <code class="btd-cyan">/my/fancy/url.html</code>
        <p>Multiple filters can be used on one output. They are applied from left to right.</p>
        <p><span class="btd-cyan"><strong>Input</strong></span></p>
        <code class="btd-cyan">{{ "john!" | capitalize | prepend: "Hello " }}</code>
        <p><span class="btd-cyan"><strong>Output</strong></span></p>
        <code class="btd-cyan">Hello John!</code>
    </div>
</section>

</main>
</div>
<!-- End page content -->
</dev>


<!-- Footer -->
<!----------------------------------------------------------->
<!-- This section is for the footer                        -->
<?php readfile("https://birchtreedev.com/includes/btd-footer.php"); ?>
<!----------------------------------------------------------->


</body>
</html>
