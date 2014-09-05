<?php
$base = $this->phiber->getBase();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta name="description" content="Phiber Framework documentation">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Phiber Framework - Documentation</title>
    <link rel="stylesheet" href="<?php echo $base?>css/style.css">
    <link rel="stylesheet" href="<?php echo $base?>css/prettify.css">
    <meta content="Housseyn Guettaf" name="author">
    <meta content="phiber framework, php easy mvc, php framework,orm" name="keywords">
  </head>
  <body>
    <nav>
      <div class="container">
        <h1>Phiber framework</h1>
        <div id="menu">
          <ul class="toplinks">
            <li><br>
            </li>
            <li><br>
            </li>
            <li><br>
            </li>
            <li><br>
            </li>
          </ul>
        </div>
        <a id="menu-toggle" href="#" class=" ">☰</a> </div>
    </nav>
    <header>
      <div class="container">
        <h2 class="docs-header"> PHP's EASY MVC</h2>
      </div>
    </header>
    <section>
      <div class="container">
        <ul class="docs-nav" id="menu-left">
          <li><a href="#welcome" class=" ">Welcome</a></li>
          <li><a href="#features" class=" ">Features</a></li>
          <li><a href="#license" class=" ">License</a></li>
          <li><span style=" color: #26abe2;"><a href="#install">Install</a></span></li>
          <li><span style=" color: #26abe2;"><a href="#config" class=" ">Configuration</a></span></li>
          <li><span style=" color: #26abe2;"><a href="#routes" class=" ">Routes</a></span></li>
          <li><span style=" color: #26abe2;"><a href="#orm" class=" ">ORM</a></span></li>
          <li><span style=" color: #26abe2;"><a href="#models" class=" ">Models</a></span></li>
          <li><span style="color: #26abe2;"><a href="#plugins" class=" ">Plugins</a></span></li>
          <li><a href="#modules" class=" ">Modules</a></li>
          <li><span style=" color: #26abe2;"><a href="#events" class=" ">Events</a></span></li>
          <li><a href="#layouts" class=" ">Layout &amp; Views</a></li>
          <li><span style=" color: #26abe2;"><a href="#cache" class=" ">Cache</a></span></li>
          <li><a href="#logging" class=" ">Logging</a></li>
          <li><a href="#external" class=" ">External Libraries</a></li>
          <li><a href="#myo" class=" ">Myo</a></li>
        </ul>
        <div id="nb" class="docs-content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img

            title="Phiber Framework" alt="Phiber Framework" src="https://raw.githubusercontent.com/ghousseyn/phiber/master/logo.png">
          <h2>Getting Started</h2>
          <h3 id="welcome"> Welcome</h3>
          <p> Tired of plain PHP or from using your old bloated and messy
            framework?</p>
          <h4> Look no more, Phiber is what you're after</h4>
          Shopping for a good framework might prove to be a tedious task not
          only because of the amount of available PHP frameworks. But mostly
          because learning a new framework just so you can test it properly,
          even if it might sound like the only right way to it, is not really an
          option for the majority of us. Not that learning a new framework is an
          easy thing to do anyway. One might spend a "career" time just
          learning the quircks of his favourite framework. The strategy most
          developers use when looking for a framework to adopt is to look for
          how many people were actually sold to a given framework (community
          that is). You know, the herd mentality. <br>
          Having a community is certainly a great point in favour of any
          framework but it should not be decisive to say the least because YOUR
          NEEDS are specific to you and to your project they are NOT and will
          never be the community's point of focus.<br>
          <br>
          <span style="font-weight: bold;">Why?</span><br>
          You need a framework that enables you as a developer with a set of
          tools, components and concepts to help you cut through the boring
          routines and repetitive tasks so you can <span style="font-weight: bold;">focus</span>
          on <span style="text-decoration: underline;">your</span> solution.<br>
          Phiber <span style="font-weight: bold;">does not</span> attempt to do
          your job or outsmart you. Other frameworks will tell that all you need
          is to define a class to be able to do CRUD (Create, Read, Update,
          Delete) operations on a table, or create class so the DDL is generated
          for you in an unnatural way only to discover later that your dear
          framework is killing your DB server by issuing queries that you never
          asked for. Soon enough you'll be asking what the PH is going on? The
          automagic you'll see in Phiber however is due to PHP's autoloading capability and a
          set of conventions as to where files should be located nothing is designed to be hidden from you. Phiber
          Framework is only ~2500 lines of code long anyway ;)<br>
          <br>
          <h3 id="features"> Features</h3>
          <ul>
            <li>Very easy to learn (probably why you picked PHP in the first
              place)</li>
            <li>Very easy to develope and deploy with <a href="#myo">Myo</a>
              and <a title="Composer Dependency Manager" href="https://getcomposer.org/">Composer</a></li>
            <li>Lightweight and very fast (100k uncompressed)</li>
            <li>One-file easy configuration</li>
            <li>Painless Routing (simple and RegEx/named params)</li>
            <li>Drop-in architecture for plugins, modules and even controllers</li>
            <li>True MVC (Models CAN communicate with views directly)</li>
            <li>Eventfull (trigger and listen to events if you want to)</li>
            <li>OOSQL ORM and Query builder (Zero configuration)</li>
            <li>Entity generator (Design your DB like a DBA)</li>
            <li>Use any library out there within your plugins, models or
              controllers</li>
            <li><a href="#myo">Myo</a> command line tool to speed up development
              and prototyping</li>
          </ul>
          <h3 id="license"> License</h3>
          <p>Phiber Framework is free for personal and commercial projects.
            Phiber Framework is released under the terms of the <a target="_blank"

              href="http://phibermit.mit-license.org/">MIT license</a>.</p>
          <hr>
          <h2> Working with Phiber</h2>
          <br>
          <h3><span style="font-weight: bold;" id="install">Install</span></h3>
          <span style="font-weight: bold;">1. <span style="font-weight: bold;">Using
              <a title="Composer" href="https://getcomposer.org/">composer</a></span><br>
          </span>
          <pre class="prettyprint">  <code><span class="pln">composer create</span><span

class="pun">-</span><span class="pln">project phiber/sample-app</span><span class="pln"> your</span><span

class="pun">-</span><span class="pln">project</span><span class="pun">-</span><span

class="pln">name</span><span class="pln"></span></code></pre>
          <span style="font-weight: bold;"><br>
            2. Using </span><a href="#myo"><span style="font-weight: bold;">Myo</span></a><br>
          Refer to <a href="#myo">Myo</a> section in this doc.<br>
          <span style="font-weight: bold;"><br>
            Permissions</span><br>
          On linux, make sure your webserver has enough permissions for phiber
          to create/write files in the application folder.<br>
          <h3 id="requirements"> Requirements</h3>
          <ul>
            <li>PHP &gt;=5.3</li>
            <li>Webserver (Apache, Nginx, IIS)</li>
          </ul>
          <h3 id="config">Configuration</h3>
          All configuration properties are located in one file that should be
          provided as a parameter to Phiber on the index.php file.<br>
          <pre class="prettyprint"> <br>  $phiber = new Phiber\wire('../application/config.php');

</pre> The configuration file doesn't have to be called config.php <br>
          <ul>
            <li>Timezone and Mode</li>
          </ul>
          Timezone can (and should be) set in php.ini to avoid calling <code>date_default_timezone_set()</code>
          on each request. If you have no access to your php.ini you can set
          this value in the configuration file.<br>
          <pre class="prettyprint">  public $PHIBER_TIMEZONE = 'Africa/Algiers';
</pre>Phiber Mode refers to what environment this installation is serving. For
          now there is only one value that has a meaning for the framework which
          is "dev". If the Mode is set to "dev" Phiber will inspect and scan
          certain directories for changes. This is obviously a burden should it
          be activated on a production environment. Any other value will be
          taken as "non-dev" and will switch to use pre-compiled files generated
          on "dev" mode as a cache to prevent directory scan, file updates and
          other tasks. This will change over the time to include other modes
          that would affect the way Phiber works but we'll keep those changes
          backward compatible as much as possible.<br>
          <pre class="prettyprint">  protected $PHIBER_MODE = 'dev';</pre>
          <ul>
            <li>Database configuration</li>
          </ul>
          <pre class="prettyprint"><br>  public $PHIBER_DB_DSN = 'mysql:host=127.0.0.1;dbname=databaseName';<br>  <br>  public $PHIBER_DB_USER = "root";<br><br>  public $PHIBER_DB_PASS = "password";<br>&nbsp;</pre>
          If you use <a href="#myo">Myo</a> to install the application<br>
          <pre class="prettyprint"> myo app myapp</pre>
          After unpacking the sample application you'll be prompted for db
          configuration<br>
          <pre class="prettyprint"> Would you like to configure myapp [yes]? (yes/no)</pre>
          You'll be asked to type in db credentials if you chose to.<br>
          <ul>
            <li>Log configuration</li>
          </ul>
          <pre class="prettyprint"> /**
   * Enable/Disable logging
   * @var boolean
   */
  public $PHIBER_LOG = true;
  /**
   * Default logging handler
   * @var string
   */
  public $PHIBER_LOG_DEFAULT_HANDLER = 'file';
  /**
   * Log filename
   * @var string A valid filename
   */<br>  public $PHIBER_LOG_DEFAULT_FILE = 'logfile.log'; <br>   /**
   * Directory of the logs please set an absolute path. Must be writable by the server
   * @var string A Valid absolute path (directories will not be created for you)
   */<br>  public $logDir = null;

  /**
   * Sets log level inclusive to previous levels i.e setting it to 'alert'
   * will log 'alert' and 'emergency' level events and 'debug' will log everything
   *
   * 'emergency';
   * 'alert';
   * 'critical';
   * 'error';
   * 'warning';
   * 'notice';
   * 'info';
   * 'debug';
   */
  public $logLevel = 'debug';<br>  /**<br>   * Stop execution on warnings<br>   */ <br>  public $STOP_ON_WARNINGS = true;
   /**<br>   * Stop execution on user triggered warnings<br>   */
  public $STOP_ON_USER_WARNINGS = true;</pre>
          <ul>
            <li>Session configuration</li>
          </ul>
          <pre class="prettyprint">  /**
   * Session will be destroyed after 1800 seconds (30
   * minutes) of inactivity Alternatively set the value that you like in seconds
   */
  public $PHIBER_SESSION_INACTIVE = 1800;
  /**
   * The session id will be reginerated after 1800 seconds (30
   * minutes). Alternatively set the value that you like in seconds
   */
  public $PHIBER_SESSION_REGENERATE = 1800;</pre>
          <ul>
            <li>Path configuration</li>
          </ul>
          <pre class="prettyprint">   /**
    * The absolute path to phiber library
    */
   protected $library = '/path/to/vendor/phiber/phiber/library';
   /**
    * The absolute path to the application folder
    */
   protected $application = '/path/to/application';
</pre>
          <ul>
            <li>Controller defaults</li>
          </ul>
          <pre class="prettyprint">  /**
   * The action method that should be called from your controller in case a
   * none-existant action is called (or none specified)
   */
  public $PHIBER_CONTROLLER_DEFAULT_METHOD = 'main';
  /**
   * The default controller to use if non is specified or not found
   */
  public $PHIBER_CONTROLLER_DEFAULT = 'index';</pre>
          <h4>Bootstrap</h4>
          <p><code><span style="font-weight: normal;">bootstrap\start </span></code><span

              style="font-weight: normal;">is not really a configuration file
              but because it is executed first it is a good place to put
              bootstrap code, add external libraries, register for events, start
              session or whatever checks and initialization tasks.<br>
            </span></p>
          <h3 id="routes">Routes</h3>
          <p>Phiber does NOT require any routes pre-configured to work. Instead
            the router uses convention to locate the target resources. Out of
            the box Phiber will route the following ugly URL:</p>
          <pre class="prettyprint">http://yoursite.com/&lt;module&gt;/&lt;controller&gt;/&lt;action&gt;/var1/val1?var2=val2/?var3/val3</pre>
          To:
          <pre class="prettyprint">Array
(
    [module] =&gt; &lt;module&gt;
    [controller] =&gt; &lt;controller&gt;
    [action] =&gt; &lt;action&gt;
    [vars] =&gt; Array
        (
            [var1] =&gt; val1
            [var2] =&gt; val2
            [var3] =&gt; val3
        )

)
</pre> And expects to find a controller class and a function
          "&lt;action&gt;()" in the path
          <pre class="prettyprint">modules/&lt;module&gt;/&lt;controller&gt;.php</pre>
          Of course that URL should not be what your links look like. This is a
          mere example of how flexible the URI parser in Phiber is. Phiber will
          guess which is a parameter name and which is the value using all
          "standard forms". Phiber promotes the same URI structure like Zend
          Framework using the slash ( / ) as a separator between params and
          their values.&nbsp; This would result in a cleaner URL. The URL above
          would looke like this:<br>
          <pre class="prettyprint">http://yoursite.com/&lt;module&gt;/&lt;controller&gt;/&lt;action&gt;/var1/val1/var2/val2/var3/val3</pre>
          <br>
          If you require configured routes however, Phiber provides two types
          that can be added right on the index.php file before calling
          Phiber::boot()<br>
          <ul>
            <li>Simple routes (aliases):</li>
          </ul>
          <pre class="prettyprint"><span style="font-family: &quot;Raleway&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif;"> </span> <br> include "../vendor/phiber/phiber/library/phiber.php";

 $phiber = new Phiber\wire('../application/config.php');

 $phiber-&gt;addRoute(array('/info'=&gt;'/module/controller/action/var1/val1');<br> $phiber-&gt;addRoute(array('/about'=&gt;'/module/controller/action/var1/val1'); <br><br> $phiber-&gt;boot();</pre>
          <ul>
            <li>RegEx and parameterized rules:</li>
          </ul>
          <pre class="prettyprint">$phiber-&gt;addRoute(array('~/info/(\d+)/(\d+)~'=&gt;'/module/controller/action/:cat/:id'));</pre>
          This will match:
          <pre class="prettyprint">/info/14/32</pre>
          And route it internally to:<br>
          <pre class="prettyprint">/module/controller/action/cat/14/id/32</pre>
          Both types support Closure to handle the requests.<br>
          <pre class="prettyprint"><br>$phiber-&gt;addRoute(<br><br> array('/info'=&gt;  <br><br>   function($phiberInstance) // an instance of Phiber is passed to your function automatically<br>    {<br>    // DB interactions<br>      $data = entity\myTable::getInstance()-&gt;select()-&gt;fetch();<br><br>    //Listen to an event<br><br>    Phiber\Event\eventfull::attach(<br><br>        function($event)<br>         { <br><br>            var_dump($event);<br><br>         }, <br>  <br>        Phiber\phiber::EVENT_SHUTDOWN<br>&nbsp;<br>     );<br><br>      echo "some text"; // print something directly<br>      $phiberInstance-&gt;view-&gt;setLayout('path/to/layout.php');
      $phiberInstance-&gt;view-&gt;setView('path/to/view.php');<br>      $phiberInstance-&gt;view-&gt;variable = 'assigned text';<br>      <br>     //Do a rewrite by setting a route and returning true<br><br>     $phiberInstance-&gt;currentRoute = array('module'=&gt;'mod',<br>                                           'controller'=&gt;'myController',<br>                                            'action' =&gt; 'myAction');<br>    <br>  //return (bool) true will tell Phiber to resume dispatching to a configured (or default) route
     <br>    return true; <br><br>  &nbsp; }<br>  );</pre>
          <br>
          <ul>
            <li>Route Files </li>
          </ul>
          These are php files holding many routes that can be grouped to keep
          your index.php file clean. To use one just create a php file put it
          anyware and then pass its path to the Phiber::addRoutesFile()
          <pre class="prettyprint">//routes.php
return array(
    array('~/info/(\d+)/(\d+)~'=&gt;'/modeule/controller/action/:param1/:param2'),
    array('~/infos~'=&gt;'/module/controller'),
    array('~/عربي/(\d+)/(\d+)~'=&gt;'/myo/index/main/:cat/:id'),
    ...
    ...
    //Other routes
);
</pre> Then we can just pass it to Phiber
          <pre class="prettyprint">$phiber-&gt;addRoutesFile('/path/to/routes.php');
</pre> <span style="font-weight: bold;">Install to a subfolder</span><br>
          Phiber's default install expects to be in the root of your website
          where the index.php is the first to receieve any request coming to
          your website. To install in subfolders all you need is to edit two
          files the index.php and .htaccess (web.config for iis).<br>
          <pre class="prettyprint">//file: index.php<br><br>//Make sure to update the include path for wire.php and config.php in this file<br><br>//change &lt;subfolder&gt; to your folder name
<br>$phiber-&gt;baseUrl('&lt;subfolder&gt;');<br><br>$phiber-&gt;boot()</pre>
          and<br>
          <pre class="prettyprint">//file: .htaccess <br><br>//change &lt;subfolder&gt; to your folder name<br>RewriteRule ^.*$ /&lt;subfolder&gt;/index.php [NC,L]</pre>
          This configuration will allow you to use Phiber applications as such<br>
          <pre class="prettyprint">http://www.yoursite.com/&lt;subfolder&gt;/</pre>
          <br>
          <h3 id="orm">OOSQL </h3>
          <p>The Object Oriented SQL interface is a lightweight Query Builder
            providing a fluent interface with ORM functionality.</p>
          <p>OOSQL's power stems from its use of the entity files created by the
            OOGen utility. This utility ships with the framework and can be used
            as a CLI script or using <a href="#myo">Myo</a> through the <code>entity</code>
            command.</p>
          <p>Entity classes reflect the data model found in your database,
            capturing essential parts of your DDL to map the tables correctly.
            The entity class will hold the column names as properties. It also
            captures the primary key if there is any and in this regard it
            doesn't rely on any <span style="font-weight: bold;">convention</span>
            what so ever. Meaning, you could name your primary key whatever you
            like and not just id or user_id... etc.</p>
          <p>Entity classes will also understand your composite keys and give
            you ways to find records using all your key members or by one or
            more of them.</p>
          <p>Relationships (innoDB required) will be discovered and available to
            query against<span style="font-family: monospace;"><span style="font-family: &quot;Raleway&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif;">.</span></span><code></code></p>
          <p><cite>Note: MySQL /MariaDB and PostegreSQL are the only databases
              supported up untill now.</cite></p>
          <p><span style="font-weight: bold;" id="stepOne">Step one</span><cite></cite></p>
          <p>Design your database like a DBA and make sure that your model is
            strong enough, use your favourite designer like MySQL Workbench then
            go ahead and create the physical database using a great DDL like
            this one:</p>
          <pre class="prettyprint"> CREATE TABLE IF NOT EXISTS `employees` (
  `emp_no` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `hire_date` date NOT NULL,
  PRIMARY KEY (`emp_no`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;<br>&nbsp;<br> CREATE TABLE IF NOT EXISTS `salaries` (
  `emp_no` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  PRIMARY KEY (`emp_no`,`from_date`),
  KEY `emp_no` (`emp_no`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;<br>--
-- Contraintes
--
 ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE;</pre>
          <span style="font-weight: bold;">Step two</span><br>
          The best way to do this is by using <a href="#myo">Myo</a> but Phiber
          provides another way that can be accessed directly on CLI or
          programatically from your own code.<br>
          <br>
          <span style="font-weight: bold;">The hard way</span><br>
          Fire up a command line and<span style="font-weight: bold; text-decoration: underline;"></span><span

            style="font-weight: bold;"> </span>cd to the oosql folder in the
          Phiber library, edit the <span style="font-family: monospace;">generate.php</span>
          file with your database credentials:<br>
          <pre class="prettyprint">&lt;?php
/**<br> * Example entities generation script
 */<br><br>// include 'pgsql.php';<br><br>&nbsp;include 'mysql.php';
 <br> //$gen = new Phiber\oosql\pgsql('pgsql:host=127.0.0.1;dbname=phiber', 'root', 'password');<br><br>&nbsp;$gen = new Phiber\oosql\mysql('mysql:host=127.0.0.1;dbname=phiber', 'root', 'password');
   <br> $gen-&gt;path = '/path/to/entityfolder';<br><br>&nbsp;$gen-&gt;generate();

?&gt;</pre>
          And then execute it<br>
          <pre class="prettyprint">php generate.php
</pre> <br>
          <span style="font-weight: bold;">The easy way</span><br>
          A better option is to use <a href="#myo">Myo</a> with the <code>-g</code>
          flag which will use your config directly so you won't edit anything
          (make sure you're in the application folder)<br>
          <pre class="prettyprint">myo entity -g
</pre> In both scenarios you'll see something like this in your terminal:
          <pre class="prettyprint"><br>Attempting tables discovery...
Analyzing employees physical columns ...
Analyzing employees DDL ...
Analyzing salaries physical columns ...
Analyzing salaries DDL ...
Found constraint salaries_ibfk_1 ...
Generating class employees ... Done
Generating class salaries ... Done
Generated 2 classes in 0.0717 ms | Memory: 19.5859kb<br>&nbsp;</pre>
          If you used <a href="#myo">Myo</a> the generated files will be in the
          entity folder. Here's what they look like inside:
          <pre class="prettyprint">/******************************<br> * salaries.php */<br><br>namespace entity;
use Phiber;
class salaries extends Phiber\entity\entity
{
  public $emp_no;
  public $salary;
  public $from_date;
  public $to_date;

  public function getPrimary()
  {
    return array("emp_no","from_date");
  }
  public function getPrimaryValue($key = null)
  {
    if(null === $key){
      return $this-&gt;getCompositeValue();
    }
    $pri = $this-&gt;getPrimary();
    if(in_array($key,$pri)){
      return $this-&gt;{$key};
    }
  }
  public function getCompositeValue()
  {
    return array(
            "emp_no" =&gt; $this-&gt;emp_no,
            "from_date" =&gt; $this-&gt;from_date,
        );
  }
  public function getRelations()
  {
    return array('emp_no'=&gt;'employees.emp_no',);
  }
  public function belongsTo()
  {
    return array("employees");
  }
}

<br>/**********************************************************************<br> * employees.php */<br>
namespace entity;
use Phiber;
class employees extends Phiber\entity\entity
{
  public $emp_no;
  public $birth_date;
  public $first_name;
  public $last_name;
  public $gender;
  public $hire_date;

  public function getPrimary()
  {
    return array("emp_no");
  }
  public function getPrimaryValue($key=null)
  {
    if(null === $key){
      return array("emp_no" =&gt; $this-&gt;emp_no);
    }
    $pri = $this-&gt;getPrimary();
    if(in_array($key,$pri)){
      return $this-&gt;{$key};
    }
  }
  public function hasMany()
  {
    return array("emp_no.salaries.emp_no");
  }
}

</pre> <span style="font-weight: bold;"><br>
            What Entity classes are good for?<br>
          </span>Entity classes extend the entity class and automatically return
          an <a href="#">oosql\oosql</a> instance giving you the possiblity to
          do whatever you need to do with the data in the table that coresponds
          to the class you called. They are accessible from anywhere
          (controllers, plugins, models ... etc). A natural place where to use
          those entity classes however is your model. A model will most likely
          do all the DB related work and is therefore a prime condidate for an
          example:<br>
          <pre class="prettyprint">&lt;?php
namespace model;
use Phiber;

class myModel extends Phiber\model
{<br>  public function getEmployees()<br>  {<br>      return \entity\employees::getInstance()-&gt;select()-&gt;fetch();<br>      //Query: SELECT * FROM employees<br>      //Return: A collection of hydrated objects of the type entity\employees<br>  }<br>}
</pre> Pretty basic heh! This doesn't show the full potential of entities
          though. Still, the returned oosql\collection will give you more power
          and enable you to do a lot of things with the results without querying
          your DB: <br>
          <pre class="prettyprint"> //Call our model<br> $employees = model\myModel::getInstance()-&gt;getEmployees();<br> <br> //Search within the collection<br> $oneEmployee = $employees-&gt;findOne('emp_no','10254');<br><br> //Correct his name<br> $oneEmployee-&gt;last_name = 'Doe'<br> $oneEmployee-&gt;save(); // Will issue an update query with only the changed column<br><br> //More search<br> $femaleEmployees = $employess-&gt;findAll('gender','F'); <br> $countSmith = $employees-&gt;countWhere('last_name','smith');<br> <br> //We don't need male employees<br> $employees-&gt;removeWhere('gender','M');<br> <br> <br> //Lets iterate<br> foreach($employees as $femaleEmployee){<br>   print $femaleEmployee-&gt;last_name. ' '. $femaleEmployee-&gt;first_name;<br> } <br> <br> //Do we still have results?<br> $empty = $employees-&gt;isEmpty();<br><br> //Yes, how many?<br> $num = $employees-&gt;count()<br><br> //Lets sort'em<br> $employees-&gt;sortByProperty('last_name');<br> <br> //Oh wait something happened we need our males back<br> $employees-&gt;restoreWhere('geneder','M');<br><br> //Last one<br> $last = $employees-&gt;getLast();<br><br> //Remove from the end<br> $last = $employees-&gt;pop();<br><br> //Free memory<br> $employees-&gt;destroy();<br> </pre>
          The hydrated objects still expose the <a target="_blank" title="API Documentation"

            href="http://#">oosql\oosql</a> methods for you to manipulate data.
          The Query Builder is a straight forward mapper of the SQL DML
          commands. <br>
          Check out all the methods exposed by <span style="color: #444444;"><a

              target="_blank" title="API Documentation" href="http://#">oosql\oosql
              </a>.</span><br>
          <br>
          <span style="font-weight: bold;">Lazy or Eager?</span><br>
          That depends on you. Both fetching modes are available through the
          oosql\oosql::with() and oosql\oosql::load() methods and a little <span

            style="text-decoration: underline;">MORE</span>!<br>
          <span style="font-weight: bold;">The eager way</span><br>
          <ul>
          </ul>
          <pre class="prettyprint"><span class="nv"> $salaries</span> <span class="o">=</span> <span

class="nv">entity\salaries::getInstance()</span><span class="o">-&gt;</span><span

class="na">select</span><span class="p">()</span>
              <span class="o">-&gt;</span><span class="na">where</span><span class="p">(</span><span

class="s1">'salary &gt; ?'</span><span class="p">,</span><span class="mi">4400</span><span

class="p">)</span>                   <br><span class="c1">              // not specifying any columns will select employees.*<br></span>            &nbsp; <span

class="o">-&gt;</span><span class="na">with</span><span class="p">(</span><span

class="k">array</span><span class="p">(</span><span class="s1">'employees'</span> <span

class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span

class="s2">'last_name'</span><span class="p">,</span><span class="s2">'first_name','gender'</span><span

class="p">)))</span> <br>
              <span class="o">-&gt;</span><span class="na">limit</span><span class="p">(</span><span

class="mi">0</span><span class="p">,</span><span class="mi">20</span><span class="p">)</span><span

class="o">-&gt;</span><span class="na">fetch</span><span class="p">();<br><br> $salaries-&gt;sortByProperty('salary','n'); //Numeric DESC<br> $salary = $salaries-&gt;getLast()<br><br> //Employees table related columns are immediately available<br> $leastPaid = $salary-&gt;last_name .' '.$salary-&gt;first_name;<br> <br></span></pre>
          <span style="font-weight: bold;">The lazy way</span><br>
          <pre class="prettyprint"><span class="nv"> //Same query without a join<br> $salaries</span> <span

class="o">=</span> <span class="nv">entity\salaries::getInstance()</span><span class="o">-&gt;</span><span

class="na">select</span><span class="p">()</span>
                   <span class="o">-&gt;</span><span class="na">where</span><span

class="p">(</span><span class="s1">'salary &gt; ?'</span><span class="p">,</span><span

class="mi">4400</span><span class="p">)</span>
                   <span class="o">-&gt;</span><span class="na">limit</span><span

class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">20</span><span

class="p">)</span><span class="o">-&gt;</span><span class="na">fetch</span><span

class="p">();<br><br></span><br><span class="p"><span class="p"> $salaries-&gt;sortByProperty('salary','n'); //Numeric DESC<br> $salary = $salaries-&gt;getLast()<br><br> //Employees table related columns are located upon request </span><br> //by calling the related table as a method on the result object (Not the collection)<br><br> $employee = $salary-&gt;employee();<br><br> //</span>Then loaded and<span

class="p"><span class="p"><span class="p"> made available</span></span> (see why bellow)<br> $employee-&gt;load()<br> </span><br><span

class="p"> $leastPaid = $</span><span class="p">employee-&gt;last_name .' '.$</span><span

class="p">employee-&gt;first_name;</span></pre>
          <span style="font-weight: bold;">A little more</span><br>
          After calling a related table in a lazy way the data is not loaded yet
          but we have the key value of the related row which allows us to
          manipulate the related row without loading its content i.e. without
          issuing any SELECTs. <br>
          <pre class="prettyprint"><span class="p">$employee = $salary-&gt;employee();<br>$employee-&gt;last_name = 'Doe';<br>$employee-&gt;save();<br><br>//Zero SELECTs<br></span><span

class="p"></span></pre>
          Another use for the <span style="font-weight: bold;">Primary ID
            injection</span> is in the insert operation too. Newly inserted
          records will recieve the last inserted ID (if it is an identity field)
          and will be returned by the save function itself so you can work with
          it without querying again (works for PostgreSQL too).<br>
          <pre class="prettyprint"> $users = entity\users::getInstance();<br><br> //Save new <br> $users-&gt;first_name = 'Mohammed';
 $users-&gt;last_name = 'Al Kacem';<br>&nbsp;$user = $users-&gt;save();<br> <br> //Update newly saved record<br> $user-&gt;last_name='Taha';<br> $user-&gt;save();<br><br>  // Zero SELECTs</pre>
          <span style="font-weight: bold;" id="models"> Models<br>
          </span><span>This is an important concept of the MVC pattern. Your
            model holds your domain logic, your data structure and manipulation
            routines. It doesn't have to do a database related task for your
            model to provide data and domain logic for your application. That's
            why the model class in Phiber will not inherit any database related
            routines to give you a lightweight sane launch pad. Database mapping
            is not done in your models but in your entity files instead allowing
            you to split the fat and keep your models as clean as possible.<br>
            Create models manually in the model directory or by using <a href="#myo">Myo</a>.
            An example model file would look like this:</span><br>
          <pre class="prettyprint"><br>namespace model;

use Phiber\model;

class mymodel extends model
{<br>  public function getData()<br>  {<br>     /* Your code here */<br>  }<br>}</pre>
          <span>To use this model just call an instance of it.</span><br>
          <pre class="prettyprint">$data = model\mymodel::getInstance()-&gt;getData();</pre>
          <span><span style="font-weight: bold;"><br>
              The V in the middle</span><br>
          </span><span><span>Can models talk to views?<br>
            </span>Yes, they can. The MVC term is used so much all over the web
            and is implemented as a pattern by different frameworks. The
            original architecture however, is not being respected by all
            frameworks. Instead, variants of this architechture are in use and
            even Phiber does not follow the orginal MVC architecture to the
            letter. <br>
            But Phiber does respect one of the features of the MVC architecture
            which is the ability for models to communicate with views. Models in
            a Phiber application can create view variables that can be rendred
            directly by the view.</span><br>
          <pre class="prettyprint">class mymodel extends model
{<br>  public function getData()<br>  {<br>     $this-&gt;view-&gt;someVar = "from model";<br>  }<br>}<br><br>// In your view file<br><br>echo $this-&gt;someVar;</pre>
          If the data returned by the model doesn't need any more processing by
          the controller (errors and failures, dumb lists or other
          notifications) there is no need to assign that variable within the
          controller. This trick will put the V back in the middle and help you
          make your models fatter.<br>
          <br>
          <span style="font-weight: bold;" id="plugins">Plugins</span><br>
          Plugins are parts of your application that are executed (or called)
          every time your application initializes. Each time your application
          receives a request Phiber will load and execute every plugin you
          declared. Plugins are executed after routing but before dispatching
          the request. In simple English Phiber executes the plugins after
          deciding which module, controller and action should be executed but
          before they are actually executed. This gives you the ability to
          access and/or controll every aspect of your application and alter or
          enhance its behaviour at will. Your authentication and any
          authorization system for example should be implemented as a plugin so
          you can make sure that every access request is checked.<br>
          A plugin is a folder containing all the code you need and provides an
          entry point for Phiber to execute it. The entry point is a php file
          with your plugin name extending Phiber\plugin and implementing run()
          method. This method is your plugin's execution point (much like main()
          in C or Java).<br>
          Here's an exmple of an authentication/authorization plugin<br>
          <pre class="prettyprint">/path/to/myapp/application/plugins/auth/auth.php</pre>
          <pre class="prettyprint"><span class="p">
class auth extends \Phiber\plugin
{

  private $user = null;
  private $resource = null;

  public function __construct()
  {
    //Get the requested module
    $this-&gt;resource = $this-&gt;route['module'];

  }
  public function run ()
  {
   <br>    //What modules that don't need authentication
    $allowed = array("default","auth","about");<br><br>    //Get user info from the session (guest user is there by default)<br>   &nbsp;$this-&gt;user = $this-&gt;session-&gt;get('user');

    if(($this-&gt;user['name'] === 'guest') &amp;&amp; !in_array($this-&gt;resource,$allowed)){

      $this-&gt;_redirect('/auth/login');<br><br>     &nbsp;return;<br><br>   &nbsp;}else{<br>      //If we're here<br>    &nbsp;//This is a logged in user or a publically accessible resource<br><br>     &nbsp;if($this-&gt;user['name'] != 'guest'){<br><br>        /* User is logged in */<br><br>  &nbsp;   }
    }
  }

}
</span></pre>Check <a target="_blank" href="#">Phiber\plugin</a> API
          documentation for a list of all available methods and properties.<br>
          <br>
          <span style="font-weight: bold;" id="modules">Modules</span><br>
          The building blocks of your application and the primary unit for its
          features. The modules are controllers grouped together in folders. A
          module like a plugin doesn't need any configuration just drop it in
          the modules folder and it should be functional.<br>
          The basic unit in this architecture is the controller. So, you'll need
          at least one controller in a module for it to be of any use. You can
          create modules by creating folders and droping a controller in it
          within the modules folder.<br>
          <pre class="prettyprint">/path/to/myapp/application/modules/books/catalog.php</pre>
          Where "books" is the module name and catalog.php is the controller.<br>
          <pre class="prettyprint">class catalog extends Phiber\controller<br>
{<br>
&nbsp; public function main()<br>
&nbsp; {<br>
&nbsp;&nbsp;&nbsp; $this-&gt;view-&gt;books = model\books::getInstance()-&gt;list();<br>
&nbsp; }<br>
}</pre>
          Modules also house the views for the controllers within.<br>
          <pre class="prettyprint">/path/to/myapp/application/modules/books/views/catalog/main.php
</pre>The catalog folder within the views holds all the partial views related to
          that controller.<br>
          <pre class="prettyprint"> &lt;?php<br> foreach($this-&gt;books as $book){<br>   echo $book-&gt;title;<br> }</pre>
          <br>
          See <a href="#myo">Myo</a> for a better way to maintain your modules.<br>
          <br>
          <span style="font-weight: bold;" id="events">Events</span><br>
          Phiber provides a way to trigger and listen to events using the <code><span>eventfull</span></code>
          class or by implementing the appropriate interfaces to further
          customize the way events are handled. A class must<code><span></span></code>
          expose the events that could be expected from it to become
          "eventfull". Event names are namespaced to avoid collision and to
          provide an easy way to organize them. For example the built-in <code><span>session</span></code>
          class fires two events one for session regenration and the other for
          session destruction.<br>
          <pre class="prettyprint">//You don't have to prefix event constants with the word 'EVENT' <br>//Pick a name that you like (you'll use it later for getEvents())<br> <br> const EVENT_REGEN = 'session.regenerate'; <br>
 const EVENT_DESTR = 'session.destroy';</pre>
          An event object holds some information about the event (event object
          is itself a bag object that could hold anything you want). Namely, the
          event name and the authority that fired the event. Authority could be
          the name of the firing method, class, interface, module or anything
          really. It provides a way to help identify the source of your event in
          case the same event name can be fired from different places within
          your application.<br>
          <pre class="prettyprint">    $authority = __METHOD__;

    $event = new Phiber\Event\event(self::EVENT_DESTR,  $authority);</pre>
          The<code> <span style="font-family: &quot;Raleway&quot;,Helvetica,Arial,&quot;Lucida Grande&quot;,sans-serif;">eventfull</span>
          </code>class exposes also two methods.<br>
          <pre class="prettyprint">public static function attach($observer, $event, $hash = null, $m = null)</pre>
          Using <code>attach()</code> one can attach a listener object to one
          or all the events fired by <code>session</code>.<br>
          <pre class="prettyprint">Phiber\Event\eventfull::attach($observer, Phiber\Session\session::EVENT_DESTR);</pre>
          Or register to all the events by specifying the root part of the event
          name.<br>
          <pre class="prettyprint">Phiber\Event\event::attach($observer, 'session');</pre>
          The other function is used to undo the previous one and unregister our
          observer<br>
          <pre class="prettyprint">public static function detach($observer = null, $event,$hash = null)</pre>
          &nbsp;<code>detach()</code> is used in a similar fashion where
          providing an already registered observer name with an event will
          unregister that observer and will no longer respond to that event:<br>
          <pre class="prettyprint">Phiber\Event\eventfull::detach($observer, Phiber\Session\session::EVENT_DESTR);</pre>
          If you want to unregister from all events fired by <code>session</code>
          just provide the root part of the event <br>
          <pre class="prettyprint">Phiber\Event\eventfull::detach($observer, 'session');</pre>
          The class <code>session</code> in this case must define the method<br>
          <pre class="prettyprint">public static function getEvents(){}</pre>
          This method is used by <code>eventfull::attach()</code> and <code>eventfull::detach()</code>
          to determine what events are available. It must return an <code>array</code>
          with the available events. <br>
          Defined in <code>session </code>like this:<br>
          <pre class="prettyprint">public static function getEvents()
  {
    return array(self::EVENT_DESTR,self::EVENT_REGEN);
  }</pre>
          <code></code> <span style="font-weight: bold;">Fire an event</span><br>
          To fire an event all we need is to call <code>notify()</code>. This
          method takes our event object as a parameter.<br>
          <pre class="prettyprint">Phiber\Event\eventfull::notify($event);</pre>
          <br>
          A listner or an observer is an object that has an <code>update()</code>
          method (it could implement <code>phiberEventObserver</code> or extend
          <code>Phiber\Events\listener</code> or <span style="font-weight: bold; text-decoration: underline;">not</span>)
          you could just define the method in your class as such.<br>
          <pre class="prettyprint">public function update(<code><span style="font-family: Menlo,&quot;Bitstream Vera Sans Mono&quot;,&quot;DejaVu Sans Mono&quot;,Monaco,Consolas,monospace;">Phiber\Event\</span></code>event $event){}</pre>
          The update method will be executed each time an event that you
          registered for is fired.<br>
          <span style="font-weight: bold;">An Example<br>
          </span>Let's create a dummy library with a dummy listener<br>
          <pre class="prettyprint">// application/lib/event/listen.php<br><br>&lt;?php
namespace event;
use Phiber\Event;

class listen extends Event\listener
{
  public function update(Event\event $event)
  {
    var_dump($event);
  }
}
</pre> Now we'll create a plugin (it could be done in a controller or a model
          too)<br>
          <br>
          <pre class="prettyprint">&lt;?php
use Phiber\Session\session;<br><br>class examplePlugin extends Phiber\plugin
{
  public function run()
  {
    //Register our dummy library (see External Libraries in this doc)<br>    <br>    $this-&gt;addLib('event');<br><br>   //Attach our listener to the session<br>&nbsp; <br>    Phiber\Event\eventfull::attach('event\listen', session::EVENT_REGEN);

  }


}</pre>
          Now, every time the session regenerates <code>event\listen::update()</code>
          will execute.<br>
          Another good place to declare your listeners is <code>bootstrap\start</code>
          This file/class will be run before anything else and is a good place
          to put any boostrap code. Events that should listen to 'phiber.boot'
          for example should definitely be decalred in this file or they'll
          never be called (because that event fires before calling other parts
          of the application).<br>
          <span style="font-weight: bold;">Attach a closure</span><br>
          Closures are a quick way to listen for events and act on them. They
          can be attached the same way other objects are and an Event object is
          passed to them as a parameter.<br>
          <pre class="prettyprint"> Phiber\Event\eventfull::attach(  function($event)<br>                                  { <br>                                       var_dump($event);<br><br>                                  }, Phiber\phiber::EVENT_SHUTDOWN<br>&nbsp;<br>                               );</pre>
          The example above is the simplest way you can use Closures with events
          but if you want to be able to dettach them later in runtime you'll
          need to provide a hash to identify them. A hash can be any random
          string.<br>
          <pre class="prettyprint">  $hash = sha1('myshutdownclosureIdStr')
 <br>  Phiber\Event\eventfull::attach(<br><br>        function($event)<br>         { <br><br>            var_dump($event);<br><br>         }, <br>  <br>        Phiber\phiber::EVENT_SHUTDOWN, $hash<br>&nbsp;<br>     );<br><br> // You can use the same hash later to detach this listener<br> Phiber\Event\eventfull::detach(null, Phiber\phiber::EVENT_SHUTDOWN, $hash);</pre>
          <span style="font-weight: bold;">Custom method<br>
          </span><span>The default method called on listener objects is <code>update()</code>
            but you can easily overide this behaviour by providing your own
            method name to the <code>attach()</code> method.</span><br>
          <pre class="prettyprint">Phiber\Event\eventfull::attach($observer, Phiber\phiber::EVENT_SHUTDOWN, null, 'myMethod'); </pre>
          <span>This way everytime '<code>phiber.shutdown</code>' is fired <code>$observer-&gt;myMethod(event
              $event)</code> will execute.<br>
            <span style="font-weight: bold;">Syntactic sugar</span><br>
            Controllers, Models and Plugins provide easier ways to register for
            events through the <code>attach()</code> builtin method. This
            method is different than the one provided by <code>eventfull</code>.</span><br>
          <pre class="prettyprint"> protected function attach($event, $observer = null, $hash = null, $runMethod = null)</pre>
          Use it like this:<br>
          <pre class="prettyprint"> //Plugin, Model or Controller<br> $this-&gt;attach(Phiber\phiber::EVENT_SHUTDOWN);<br><br> //this will hold a copy of this object and execute update() on it when event is fired</pre>
          <span>To register a different method to execute on event pass its name
            as the fourth param.</span><br>
          <pre class="prettyprint">//Plugin, Model or Controller<br> $this-&gt;attach(Phiber\phiber::EVENT_SHUTDOWN, null, null, 'myMethod');</pre>
          <span>To pass in a different object instead of the current Plugin,
            Model or Controller</span> instance pass this object (or class name)
          as the second parameter<br>
          <pre class="prettyprint"> $observer = new library\myClass();<br> //or<br> $observer = 'library\\myclass'; //It'll be instanciated on event<br><br> $this-&gt;attach(Phiber\phiber::EVENT_SHUTDOWN, $observer, null, 'myMethod');<br> </pre>
          The event name can be also passed directly instead of using the
          constant (not recommended)<br>
          <pre class="prettyprint"> $this-&gt;attach('phiber.shutdown');<br> //same as <br> $this-&gt;attach(Phiber\phiber::EVENT_SHUTDOWN);
</pre> Firing an event from a Plugin, a Model or a controller as you might
          expect now is just as easy.<br>
          <pre class="prettyprint">$event = new Phiber\Event\event('mypackage.myevent',__class__);<br><br>$this-&gt;notify($event);</pre>
          <span style="font-weight: bold;" id="layouts">Layout &amp; views</span><br>
          Since PHP itself is an excellent templating langugae Phiber doesn't
          waste any effort/resources parsing a template language of its own but
          you can use one if want to. (see using <a href="#external">external
            libraries</a> in this doc). Actually Phiber allows you to use more
          than one templating engine at the same time if you feel the need to.<br>
          A layout is the main template file and all other partial templates
          (views) are merged into it before outputing. The layout file should be
          within the layouts folder of the application but the file name is
          configurable in your configuration file (defaults to <code>layout.php</code>).
          <br>
          <pre class="prettyprint">  /**
   * Layout file
   */
  public  $PHIBER_LAYOUT_FILE = 'layout.php';</pre>
          A layout file should call the <code>render()</code> method where the
          partial view should be rendered.<br>
          <pre class="prettyprint">$this-&gt;render();</pre>
          View files are associated with actions and are partial template files
          that will define formating for data specific to the action that called
          it. To escape-print a variable in a partial template or in the main
          layout file Phiber provides the <code>T_()</code> function. <br>
          <pre class="prettyprint">T_($this-&gt;var);<br>// a wrapper for <br>echo htmlentities($this-&gt;var);</pre>
          Text, objects and arrays (or any other data/resource) can be passed to
          your views from your controllers, plugins or models by assigning them
          to the View object available to all of them at runtime. (Make sure to
          use unique names for your variable names to avoid overriding them).<br>
          <pre class="prettyprint">//Controllers, Plugins or Models<br><br>$this-&gt;view-&gt;variable = 'value';<br>//or array<br>$this-&gt;view-&gt;array = array('someValue');<br>//or object<br>$this-&gt;view-&gt;obj = new stdClass;</pre>
          Variables created like this can then be output to your users from
          within your temple files (partial and layouts).<br>
          <pre class="prettyprint">&lt;h3&gt;&lt;?php T_($this-&gt;variable) ?&gt;&lt;/h3&gt;<br><br>&lt;table id="cart"&gt;<br>&lt;?php<br>foreach($this-&gt;array as $columns){<br>  echo '&lt;tr&gt;&lt;td&gt;'<br>  echo implode('&lt;/td&gt;&lt;td&gt;',$columns);<br>  echo '&lt;/td&gt;&lt;/tr&gt;';<br>}<br>?&gt;<br><br>&lt;/table&gt;<br><br>&lt;span id="total"&gt;&lt;?= $this-&gt;obj-&gt;total ?&gt;&lt;/span&gt;</pre>
          View files are expected within the view directory within each module.
          There is a folder for each controller and a view file for each action
          within that controller.<br>
          <pre class="prettyprint">/path/to/myapp/application/modules/&lt;module&gt;/views/&lt;controller&gt;/&lt;action&gt;.php</pre>
          <span style="font-weight: bold;" id="cache">Cache</span><br>
          For expensive data fetching operations choosing a good cache mechanism
          and implementing it correctly is crucial to your application. The
          problem I've seen with some cache implementations is the complex
          configuration. Phiber provides an easier way for your cache needs. The
          only available driver untill now though is the file based caching.
          Don't panic not only that you can create your own cache solutions and
          use them very easily but you can also use composer to install and use
          your favourite cache library (see <a href="#external">external
            libraries</a> in this doc).<br>
          <pre class="prettyprint"><br> $driver = new Phiber\Cache\file;
<br> $cache = new Phiber\Cache\cachepool($driver);<br><br> $key = sha1('employees');<br><br> $data = $cache-&gt;getItem($key);<br><br> if($cache-&gt;isHit()){ // Do we have a valid cahced version
<br>    $employees = $data; // use it
<br> }else{
<br>    // No cache was found lets hit the DB    <br><br>    $employees = entity\employees::getInstance()-&gt;select()-&gt;fetch(1000);
<br>    $cache-&gt;save($key,$employees,60); //Cache data for one minute<br><br>&nbsp;}</pre>
          The <code>Phiber\Cache\cachepool</code> class will be used always to
          deal with your cache regardless of your backend. Except for the
          driver, the code above can be used with a NoSQL backend, Memcache or
          any other facility you have deployed for cache purposes. The <code>Phiber\Interfaces\cacheDriver</code>
          interface defines a common interface for your driver implementations
          (see the file driver implementation as an example).<br>
          <pre class="prettyprint">namespace Phiber\Interfaces;

interface cacheDriver
{
  public function set($key,$value,$ttl = null);
  public function getKey();
  public function get($key);
  public function getBag();
  public function getMulti($keys);
  public function deleteAll();
  public function delete($key);
  public function isHit();
  public function exists($key);
  public function setExpiration($ttl = null);
  public function getExpiration();
}
</pre><span style="font-weight: bold;">Bag items</span><br>
          Each object sent to be cached should be wrapped into an item object
          first that would serve as a bag for it, holding some information about
          it. This bag object provides a way for the driver to
          evaluate/update/get/set the ttl and timestamp of the object while the
          data is untouched which also would save us any filesystem acrobactics.
          The item class is very simple and its usage is easy too.<br>
          <pre class="prettyprint">namespace Phiber\cache;

class item
{
  public $data,
         $ttl,
         $timestamp;

  public function setTtl($ttl)
  {
    $this-&gt;ttl = (int) $ttl;
    $this-&gt;timestamp = microtime(true);
  }

}</pre>
          You probably already guessed how we are going to use this bag within
          our driver.<br>
          <pre class="prettyprint">  $this-&gt;bag = new Phiber\Cache\item();
  $this-&gt;bag-&gt;data = $object; // The object to cache
  $this-&gt;bag-&gt;setTtl($ttl); // ttl in seconds</pre>
          <span style="font-weight: bold;" id="logging">Log</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <code><span style="font-style: italic;">"Programming
              is the art of creating errors"</span></code> <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <span style="font-style: italic;">~~ A wise man said once</span><br>
          <br>
          Logging and error reporting is probably the most important part of
          software development and not only while developing but also in
          maintenance. Phiber gave great care to this part. The error handler
          provided by Phiber integrates with your application and converts every
          error to an <span style="font-weight: bold;">Exception</span>. Phiber
          catches even <code>Fatal Errors</code> and uses an intuitive way to
          log/display those errors. Phiber by default will display any error to
          your screen in <code>debug</code> mode (logs them too). Other log
          modes are more suitable for production since they don't display
          anything to your browser. The log will ignore all modes bellow the
          selected mode. If you want to ignore <code>Notice</code> messages
          (not recommended) you can chose <code>warning</code> mode. Phiber
          however will log everything above the chosen mode. A log mode <code>warning</code>
          will also log any event marked as <code>error</code>, <code>critical</code>,
          <code></code><code>alert </code>or <code>emergency</code><code></code>.<br>
          All errors provided natively by PHP are handled and categorized into
          one of the seven levels provided.<br>
          <pre class="prettyprint">    // Fatal Error [emergency]<br>    E_ERROR
    E_COMPILE_ERROR
    E_CORE_ERROR
    E_PARSE
    E_USER_ERROR<br><br>    // Uknown error [alert]<br><br>    // Warning [critical]<br>    E_COMPILE_WARNING
    E_CORE_WARNING
    E_WARNING<br><br>    // Catchable [error]<br>    E_RECOVERABLE_ERROR<br><br>   <br>    // User Warning [warning]<br>    E_USER_WARNING
   <br>    // Notice [notice]<br>    E_USER_NOTICE
    E_NOTICE
    E_STRICT<br><br>    // Deprecated [info]<br>    E_DEPRECATED
    E_USER_DEPRECATED<br><br>   </pre>
          Converting all errors to an Exception means that you can catch PHP
          error or user triggered errors in a try catch block. (in debug mode a
          stacktrace will be printed for this type of errors, <code>E_USER_WARNING</code>
          won't print a stacktrace)<br>
          <pre class="prettyprint"> try {<br>      trigger_error('Something bad happened!',<code><span

class="html">E_USER_ERROR)</span></code>
  }catch(\Exception $e){<br>      echo $e-&gt;getMessage();<br>  }<br>  <br>  //Without a try catch you'll never get here<br>  echo 'This part will be printed just fine Now.';</pre>
          Phiber provides also a way to change the behaviour on warnings i.e.
          just log the warning and go on with our lives or halt and let somebody
          know they messed up (see the <a href="#config">configuration</a>
          section above).<br>
          <span style="font-weight: bold;"><br>
            Log handlers</span><br>
          Phiber ships with only the file log handler (log to files) but
          provides an abstract logger class for you if you want to log to other
          mediums (syslog, remote log, email ... etc).<br>
          Another log handler could be easily added using the <code>wire::setLog()</code>
          method.<br>
          <pre class="prettyprint">public function setLog($logger = null,$params = null,$name = null)</pre>
          This method defaults to whatever you spcified in your configuration
          (file in this case). The second parameter is just an array of options
          passed to the constructor of your log handler (log file path in this
          case) and could be anything your handler needs. The last param is a
          name that would be used to index your handler within a stack of
          handlers if you use more than one. This is an extendable multi channel
          log facility that you can use whichever you please. For file log
          handler you can also use more than one log file, to log different
          events to different files for example.<br>
          <pre class="prettyprint"><br>$this-&gt;setLog(null, 'secondlog','mylog'); // since 'file' is default null is enough<br><br>$this-&gt;setLog('file', 'anotherlog'); // log index name will be used as filename<br><br>//Suppose that you created an email based log handler<br>$this-&gt;setLog('email', 'myemail@domain.com','myemail');<br><br>//Use them<br><br>$this-&gt;logger()-&gt;info('Log an info event')// log to default logfile<br><br>$this-&gt;logger('mylog')-&gt;notice('Log a notice event');// log to logs/secondlog.log<br><br>$this-&gt;logger('anotherlog')-&gt;error('Log an error event');// log to logs/anotherlog.log<br><br>$this-&gt;logger('myemail')-&gt;alert('Log an alert event'); // sends and email
</pre> <span style="font-weight: bold;">WTF</span><br>
          That's probably the word that springs to your had (sometimes makes it
          to your lips) whenever you see something you didn't expect your
          application to do. I've seen this on Aaron Fisher's <a href="http://www.aaron-fisher.com/articles/web/php/wtf/">blog</a>
          and couldn't stop using it since then (the version I ended up using is
          slightly different though).<br>
          If you want to pretty print an object to see what is going on in an
          eyes-friendly manner and without truncated data (var_dump and print_r
          are ugly) just pass that object to this static function provided by <code>Phiber\tools</code>.<br>
          <pre class="prettyprint">Phiber\tools::wtf($object);</pre>
          Phiber uses this in debug mode to pretty print and format stacktraces
          and error messages.<br>
          <br>
          <span style="font-weight: bold;" id="external">External libraries</span><br>
          The motivation behind the creation of Phiber is well supported by the
          lack of a really light weight, easy to learn and performing framework
          for PHP. I have no intention to reinvent the wheel though (that's why
          Phiber ships with bare minimum handlers for cache and log for
          example). There exists some great libraries out there to handle
          specific tasks and we have an excellent dependency manager (composer).
          One of the greatest things about Phiber is that it'll let you use any
          library in a very convenient way. Composer autoloader can be used
          directly to load your libraries. Just uncomment the line that requires
          the composer's autoloader in index.php.<br>
          <pre class="prettyprint">//require "../vendor/autoload.php";</pre>
          That's all you need to do to use Twig for example. Twig is a powerfull
          albeit heavy templating engine that is designer friendly. To use it
          just require it in your composer.json, run the update command and then
          use it right away on your Phiber application.<br>
          One way to do this (we'll be using Twig along with Phiber's
          templating) is by creating a templates folder within your application
          and then&nbsp; initializing Twig in the bootstrap\start as such:<br>
          <pre class="prettyprint">//file: /path/to/myapp/application/bootstrap/start.php<br><br>    $loader = new \Twig_Loader_Filesystem($wire-&gt;config-&gt;application.'/templates/');

    $twig = new \Twig_Environment($loader,array(
         'cache' =&gt; $wire-&gt;config-&gt;application.'/data/cache',
    ));
    <br>    // pass it to the rest of the framework
    $wire-&gt;twig = $twig;</pre>
          Now all you need is to actually create your templates and use them<br>
          <pre class="prettyprint">//file: /path/to/myapp/application/templates/mytemplate.tpl<br><br>{{name}} {{type}}</pre>
          Within your controller prepare your template<br>
          <pre class="prettyprint">//file: /path/to/myapp/application/modules/&lt;module&gt;/&lt;controller&gt;.php<br><br>$this-&gt;view-&gt;name = 'Phiber';<br>$this-&gt;view-&gt;type = 'Framework';<br>$this-&gt;view-&gt;template = $this-&gt;twig-&gt;loadTemplate('mytemplate.tpl');</pre>
          All is left now is to use that temple in our partial view<br>
          <pre class="prettyprint">//file: /path/to/myapp/application/modules/&lt;module&gt;/views/&lt;controller&gt;/&lt;action&gt;.php<br><br>echo $this-&gt;template-&gt;render(array('name' =&gt;  $this-&gt;name, 'type' =&gt; $this-&gt;type));</pre>
          If you want to use only Twig templating just disable the layout (in
          configuration or dynamically in runtime) along with views in the <code>bootstrap\start</code>
          script.<br>
          <pre class="prettyprint">//file: /path/to/myapp/application/bootstrap/start.php<br><br>    $wire-&gt;view-&gt;disableLayout(); // not needed if disabled in configuration
    $wire-&gt;view-&gt;disableView();</pre>
          <span style="font-weight: bold;"> <br>
            What if I don't use composer?</span><br>
          No problem (consider using composer if you can though)<br>
          Phiber provides another way to register external libraries to be used
          within your application. <br>
          All you need to do is to drop your library in the <code>lib</code>
          folder within your application then, within a plugin or the <code>bootstrap\start</code>
          script (can be done within a controller or a model too) call the <code>addLib()</code>
          method and register the root namespace of your library. For example
          the <code>Browser\Browser</code> library could be loaded this way.<br>
          <pre class="prettyprint"> $this-&gt;addLib('Browser','gabrielbull/browser/src/Browser');</pre>
          Phiber will only load correctly namespaced libraries (correctly means
          in relation to the filesystem hirarchy here). <br>
          Now you can just use this library like so:<br>
          <pre class="prettyprint">$browser = new Browser\Browser;</pre>
          <br>
          <span style="font-weight: bold;" id="myo">Myo</span><br>
          Myo is a command line tool designed specifically to save you few brain
          cells when dealing with the most boring (yet very important) parts of
          the life of a developer. This includes creating folders and files and
          laying out the hirarchy for the application. Not just any folders or
          files we're talking creating modules, controllers, views, plugins,
          extensions and generating entity files of huge databases holding
          hundreds of tables in <span style="font-weight: bold;">FEW </span>seconds!
          <br> Yes, you got that right, just read on.<br>
          <span style="font-weight: bold;">Requirements</span><br>
          - php5-curl <br>
          - libcurl4-openssl-dev<br>
          - Zip<br>
          <span style="font-weight: bold;">How to use Myo?</span><br>
          Installing Myo is as easy as unzipping the archive you downloaded
          anywhere on your dev machine (or cloning it from <a target="_blank" title="Phiber Myo"

            href="https://github.com/ghousseyn/phiber-myo">github</a>). You'll
          need to have php in your path and, depending on your operating system,
          you need to use the <span style="text-decoration: underline;">myo.bat</span>
          or <span style="text-decoration: underline;">myo.sh</span>. Add Myo's
          installation directory to your path.<br>
          Myo might look for the config.php file in the working directory. To
          work on an application just cd to its application folder.<br>
          <pre class="prettyprint">&gt;cd /path/to/myapp/application</pre>
          Another way to it is to provide your application configuration path as
          an option to Myo on each command.<br>
          <pre class="prettyprint">&gt;myo &lt;command&gt; --conf-path /path/to/myapp/application/config.php</pre>
          Not all commands require the configuration file though.<br>
          <br>
          <span style="font-weight: bold;"> A Phiber Application</span><br>
          An application for Phiber is a set of components grouped together in a
          folder called application.<br>
          The application folder is where you'll spend the most of your time
          creating modules, controllers, views, plugins, entities, models,
          layouts and routes. It also has a logs folder to check your logs and
          houses the config.php file where all your settings are.<br>
          Creating and maintaining a hirarchy of folders and files might turn
          quickly into an unmanageable mess after few weeks of work. It's even
          harder to come back after sometime to work on an old project or WORSE
          working on somebody's else code.<br>
          With Myo however, maintaining your MVC layout will not be intimidating
          no more.<br>
          <br>
          <span style="font-weight: bold;">Create an application</span><br>
          Creating an application with Myo involves unpacking a sample
          application that is included with Myo with an option to fetch the
          latest sample application straight from github for you.<br>
          <br>
          <pre class="prettyprint">&gt;myo app myapp<br><br>The current version is: t548c6cb28911d7dce5d96e645c856a7b35dabf

Do you want to check the HEAD revision on Github [no]?(yes/no)</pre>
          If you chose to check for updates you'll be asked to provide your
          github credentials to query their API for updates. Enter your username
          and hit Enter.<br>
          <pre class="prettyprint">Your github username:&lt;type your username&gt;</pre>
          For extra security, in case you're not alone or just paranoid, the
          password will not show up when typing (Windows and Linux). Just type
          it in and hit Enter.<br>
          If the HEAD revision is newer you'll get something like this :<br>
          <pre class="prettyprint">Fetching revision: g5475ff2f44a9102d8b78639bfcc221c110390b3

Done!

Deploying g5475ff2f44a9102d8b78639bfcc221c110390b3 ...

To: /path/to/myapp

Unpacking ...

Would you like to configure myapp [yes]? (yes/no)</pre>
          If your version is already up-to-date<br>
          <pre class="prettyprint">You seem to have the latest version!

Deploying g5475ff2f44a9102d8b78639bfcc221c110390b3 ...

To: /path/to/myapp

Unpacking ...

Would you like to configure myapp [yes]? (yes/no)</pre>
          If you chose "no" at this stage you're done. Go to your config.php put
          in DB credentials and path information and then go to the next step.<br>
          If your answer was "yes" however, Myo will ask for some more
          information<br>
          <pre class="prettyprint">Host [mysql]: localhost

DB Name [mysql]: myapp_db

DB User [mysql]: db_user

DB Passwrod [mysql]:</pre>
          Your path information will be populated automatically as well. All you
          need now is to add Phiber to the mix.<br>
          <pre class="prettyprint">cd myapp<br>composer self-update<br>composer install</pre>
          That's it, if you set up a vhost or change your docroot to the newly
          created <br>
          <pre class="prettyprint">/path/to/myapp/public_html</pre>
          You'll be reading this document from a fresh install of a sample
          Phiber application. Congrats!<br>
          <br>
          <span style="font-weight: bold;">Create a module</span><br>
          A module for Phiber is a standalone part of your application holding a
          group of controllers.<br>
          For Myo a module is a folder with at least one file (controller) and
          two folders. The views folder within any module comprises a folder for
          each controller (named after it) where the partial views corresponding
          to the controller's actions are stored.<br>
          How to create a module with Myo then?<br>
          Myo's command <span style="font-weight: bold;">mvc</span> exposes the
          options you need to create different parts of your MVC layout. <br>
          <pre class="prettyprint">//Don't forget to cd to the application folder<br><br>&gt;myo mvc --module books</pre>
          The command above will create a folder structure like this<br>
          <pre class="prettyprint">/path/to/myapp/application/modules/books/views/&lt;default controller&gt;</pre>
          The books folder will have a default controller (its name depends on
          your config). The views folder will have a folder with the name of the
          default controller. Within that folder a partial view file will be
          created with the name of the default action (also in your config).<br>
          <pre class="prettyprint">/path/to/myapp/application/modules/books/views/&lt;default controller&gt;/&lt;default action&gt;.php</pre>
          With default settings the path will look something like<br>
          <pre class="prettyprint">/path/to/myapp/application/modules/books/views/index/main.php</pre>
          "index" is the default controller and "main" is the default action.<br>
          <br>
          <span style="font-weight: bold;">Create controllers</span><br>
          In the same fashion, creating a controller is only one command away.<br>
          <pre class="prettyprint">&gt;myo mvc --module books --controller catalog</pre>
          The command above will create controller catalog within the module
          books. If we hadn't create the module "books" this command would have
          done that without adding the default controller this time. The created
          files and folders are:<br>
          <pre class="prettyprint">/path/to/myapp/application/modules/books/catalog.php</pre>
          And<br>
          <pre class="prettyprint">/path/to/myapp/application/modules/books/views/catalog/main.php</pre>
          <br>
          <span style="font-weight: bold;">Create actions</span><br>
          To create an action we'll need to specifiy both the module name and
          the controller name. If they don't exist they'll be created for us.<br>
          <pre class="prettyprint">&gt;myo mvc --module books --controller catalog --action show</pre>
          This will add a method to the class catalog in the catalog.php file <br>
          <pre class="prettyprint">class catalog extends Phiber\controller
{
  public function main()
  {
    /* Default action */
  }<br>  public function show()<br>  {<br>    /* Action code here */<br>  }<br>&nbsp;}<br>        </pre>
          And a view file called show.php within the views folder.
          <pre class="prettyprint">/path/to/myapp/application/modules/books/views/catalog/show.php</pre>
          <br>
          <span style="font-weight: bold;">Create models</span><br>
          Models can also be created by this same command.<br>
          <pre class="prettyprint">&gt;myo mvc --model mymodel</pre>
          The newly created model will be empty.<br>
          <pre class="prettyprint">/**<br>* /path/to/myapp/application/model/mymodel.php<br>*/<br>&lt;?php
namespace model;

use Phiber\model;

class mymodel extends model
{<br>}</pre>
          <br>
          <span style="font-weight: bold;">Create entity</span><br>
          <a href="#stepOne">Generate entity files</a> using this command to map
          your tables automatically using classes. Entity files are tightly
          linked to your database. Please check the <a href="#orm">OOSQL</a>
          entry above if you didn't do that already. <br>
          <pre class="prettyprint"> 	<br>  _ __ ___  _   _  ___
 | \'_` _ \| | | |/ _ \
 | | | | | | |_| | (_) |
 |_| |_| |_|\__, |\___/
             __/ |
            |___/    Phiber's Command Line Tool &lt;version&gt;<br>                   Author: Housseyn Guettaf &lt;ghoucine@gmail.com&gt;<br><br>       Usage:

 	myo &lt;comand&gt; &lt;flag&gt; [[--option1 value][--option2 = value]...] -- arg1 arg2 ...


 Flags:

 	-i		Preserve case otherwise files will always be created in lowercase
 	-g		Generate entity files when used with myo entity

 Commands:

 	app		Creates a new Phiber application

		 Usage:

		 myo app &lt;appname&gt;

		 Options:

		 --app-path		Specify the application path

 	entity		Creates an entity file or generate entities from db with -g

		 Usage:

		 myo entity &lt;entity name&gt;

		 Creates an empty entity file



		 myo entity -g

		 Generates entity files from the database

		 with no options it will use your config to access the db and

		 put the files into the entity folder

		 options:

		 --db-dsn 		 The dsn of your db
		 --db-host 		 Database host
		 --db-name 		 Database name, overides --db-dsn
		 --db-user 		 Database username
		 --db-pass 		 Database password
		 --entity-path 		 The folder to put generated files in



 	ext		Creates myo extensions.

  		 Usage:

  		 myo ext &lt;extension name&gt;

  		 The new extension will be used as a command:

  		 myo &lt;extension name&gt;


 	help		Provides more information about commands.

		 Usage:

		 myo help &lt;command&gt;


 	mvc		Creates different parts of the MVC layout.

  		 mvc &lt;flag&gt; [option]

  		 Options:

  		 --module &lt;module name&gt;

  		 Creates a module and defaults to module 'default'


  		 --controller &lt;controller name&gt;

  		 Creates a controller and defaults to 'index'


  		 --model &lt;model name&gt;

  		 Creates a model


  		 --action &lt;action name&gt;

  		 Creates an action for a given controller


</pre><br>
        </div>
      </div>
    </section>
    <section class="vibrant centered">
      <div class="container">
        <h4> Found a typo? Want to correct something? Please <a title="Fork this document"

            href="https://github.com/ghousseyn/phiber/edit/gh-pages/index.html">fork</a>
          this doc and send a pull request</h4>
      </div>
    </section>
    <footer>
      <div class="container">
        <p> © 2014 Coda Systems </p>
      </div>
    </footer>
    <script src="<?php echo $base?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $base?>js/prettify/prettify.js"></script>
    <script src="<?php echo $base?>js/prettify/run_prettify.js?skin=sunburst"></script>
    <script src="<?php echo $base?>js/layout.js"></script>
    <script src="<?php echo $base?>js/jquery.localscroll-1.2.7.js" type="text/javascript"></script>
    <script src="<?php echo $base?>js/jquery.scrollTo-1.4.3.1.js" type="text/javascript"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54324700-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>

<?php
//This will render the partial view of the current action
$this->render();
?>