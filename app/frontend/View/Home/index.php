<div class="container">
  <div class="col-md-4">
    <h1>Welcome</h1>
    <p>
      PetakUmpet is an open-source PHP application framework designed to provide structure and libraries 
      to help develop website and web-app quickly. 
    </p>
    <p><strong>Main Features</strong>
      <ul>
        <li>PetakUmpet provides separation of development and design with MVC style</li>
        <li>Easy integration to external libraries</li>
        <li>Implemented Role-based access control for application development</li>   
        <li>Simple and extendable configuration, using php-class configuration</li>
      </ul>
    </p>
    <h3>Hello Indonesia!</h3>
    <p>PetakUmpet is build by Indonesian developers that just loves 
    good framework for robust application development</p>
  </div>
  <div class="col-md-6">
    <div class="row-fluid">
      <br>
    </div>
    <div class="row-fluid">
    <h3>Fun coding with PetakUmpet</h3>

    <pre class="prettyprint">
&lt;?php 
  // Action code
  namespace frontend;

  use PetakUmpet\Application;

  class HomeApplication extends Application {

    public function indexAction()
    {
      return $this->render(array('target'=>'Indonesia!'));
    }
  }
    </pre>

    <pre class="prettyprint">
&lt;!-- HTML View Code --&gt;
&lt;p&gt;Hello, &lt;?php echo $target; ?&gt; &lt;/p&gt;
    </pre>
    <pre class="prettyprint">
    // Browser output
    Hello, Indonesia!
    </pre>
    </div>
  </div>
</div>

