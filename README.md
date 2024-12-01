<h1>Laravel.Parcing</h1>
<pre>
<a href="https://www.youtube.com/watch?v=qVFpK_gV1Ns&list=PLNvHH49JXUUAWpfK13CReWjlHH0bIUGS4&index=4">Parcing site on Laravel framework</a>
<b>Stack</b>: Laravel, DiDOM
</pre>
<h3>Steps:</h3>
<ol>
  <li>Creating a Laravel project</li>
  <li>Connecting the DiDOM library</li>
  <li>Connecting the Guzzle library</li>
  <li>Specify URL for parsing</li>
  <li>Create an object of the Client class to send http requests</li>
  <li>Send GET request to URL</li>
  <li>Save the received response to the $html variable
    <ul>
    <li>$response->getBody() returns the body of the response - the HTML code of the page.
    </li>
    <li>The getContents() method converts the response body to a string.</li>
  </li>
  
  <li>Parcing
  <ul>
    <li>The Document object from DiDom is created.</li>
    <li>The loadHtml($html) method loads HTML content into a Document object for further processing.</li>
  </ul>
  </li>
</ol>
