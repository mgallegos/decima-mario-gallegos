<div id="jmv-main">
  <div id="jmv-doc-title" class="clearfix">
    <div class="pull-left">
      <h1 class="lqp-header">
        <a href="https://github.com/mgallegos/jquery-mg-validation" target="_blank" style="color:black;">
          <i class="fa fa-github jmv-tooltip" data-toggle="tooltip" data-placement="top" title="Source code is hosted on GitHub"></i></a>
        jQuery MG Validation Plugin
      </h1>
    </div>
    <div class="jmv-poser">
      <a href="http://badge.fury.io/gh/mgallegos%2Fjquery-mg-validation"><img src="https://badge.fury.io/gh/mgallegos%2Fjquery-mg-validation.png" alt="GitHub version" height="18"></a>
    </div>
  </div>
  <hr class="lqp-header-hr">
  <h2 class="lqp-header">Requirements</h2>
  <hr class="lqp-header-hr">
  <ul>
    <li>
      <a href="http://jquery.com/" target="_blank">jQuery</a>
    </li>
    <li>
      <a href="https://raw.githubusercontent.com/tonytomov/jqGrid/master/js/jquery.fmatter.js" target="_blank">jQuery Grid Formatter Plugin</a>
    </li>
    <li>
      <a href="http://jqueryui.com/download/#!version=1.11.1&components=0000000000000000000001000000000001000" target="_blank">jQuery UI Effects Core</a>
    </li>
    <li>
      <a href="http://jqueryui.com/download/#!version=1.11.1&components=0000000000000000000001000000000001000" target="_blank">jQuery UI Effects Shake</a>
    </li>
    <li>
      <a href="https://raw.githubusercontent.com/flesler/jquery.scrollTo/master/jquery.scrollTo.min.js" target="_blank">jQuery ScrollTo</a>
    </li>
    <li>
      <a href="http://getbootstrap.com/" target="_blank">Bootstrap CSS Framework (optional)</a>
    </li>
    <li>
      <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome (optional)</a>
    </li>
  </ul>
  <h2 class="lqp-header">Features</h2>
  <hr class="lqp-header-hr">
  <ul>
    <li>Fully support declarative settings.</li>
    <li>Validation using regular expression.</li>
    <li>Character restriction in text field using regular expression.</li>
    <li>Built-in validators.</li>
    <li>Numeric formatting.</li>
    <li>Custom validation messages.</li>
    <li>Bootstrap compatible out of the box.</li>
    <li>Easy extendable.</li>
    <li>jQuery UI shake effect is use as hint.</li>
  </ul>
  <h2 class="lqp-header">Download</h2>
  <hr class="lqp-header-hr">
  <a class="btn btn-lg btn-primary" href="https://github.com/mgallegos/jquery-mg-validation/archive/v0.1.zip"><i class="fa fa-download"></i> Download v0.1</a>

  <h2 class="lqp-header">Installation</h2>
  <hr class="lqp-header-hr">
  <p>Include dependencies:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-0">Copy</span>
  </div>
  <pre id='jmv-code-0' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example0')</pre>
  <div class="alert alert-info" role="alert">
    <p><i class="fa fa-info-circle fa-lg"></i> If you are already using <a href="http://jqueryui.com" target="_blank">jQuery UI</a>, don’t worry about including the scripts at line 2 and 3, and if you are using <a href="http://www.trirand.com/blog/?page_id=6" target="_blank">jQuery Grid</a> don’t worry about including the script at line 4.</p>
  </div>
  <p>Include the "jQuery MG Validation Plugin":</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-1">Copy</span>
  </div>
  <pre id='jmv-code-1' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example1')</pre>
  <p>The plugin uses icons to hint the user when an input is or isn’t valid, by default it uses <a href="http://getbootstrap.com/components/#glyphicons-glyphs" target="_blank">Bootstrap Icons</a> but if your are not using <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> you can use <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome icons</a>:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-2">Copy</span>
  </div>
  <pre id='jmv-code-2' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example2')</pre>
  <p>And finally if you’re not using  <a href="http://getbootstrap.com" target="_blank">Bootstrap CSS Framework</a> include the CSS file of the "jQuery MG Validation Plugin":</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-3">Copy</span>
  </div>
  <pre id='jmv-code-3' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example3')</pre>
  <div class="hidden-lg" style="margin-bottom: 5px;">
      <!-- Blog Post -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-9426377696368258"
           data-ad-slot="1616020474"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
  </div>
  <h2 class="lqp-header">Usage</h2>
  <hr class="lqp-header-hr">
  <h3>Adding validations to a Form</h3>
  <p>The plugin has validators built-in, these validator includes: regular expression, numeric formatting, help message and character restriction (some of them). The validator availables are:</p>
  <ul>
    <li>Positive Integer (zero is allowed)(data-mg-validator="positiveInteger")</li>
    <li>Positive Integer (zero is invalid) (data-mg-validator="positiveIntegerNoZero")</li>
    <li>Signed Integer (data-mg-validator="signedInteger")</li>
    <li>Money (data-mg-validator="money")</li>
  </ul>
  <p>To add a validator to an "input" element simply add the attribute "data-mg-validator='validator'" with the correspondence validator. Example:</p>
  <form id="form1" role="form">
    <div class="form-group mg-hm">
      <label class="control-label" for="price">Product Price</label>
      <input type="text" data-mg-validator="money" class="form-control" id="price" placeholder="Enter price">
    </div>
    <div class="form-group mg-hm">
      <label class="control-label" for="length">Book Length</label>
      <input type="text" data-mg-validator="positiveInteger" class="form-control" id="length" placeholder="Enter book length">
    </div>
  </form>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-4">Copy</span>
  </div>
  <pre id='jmv-code-4' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example4')</pre>
  <p>To make a form element "required" add the attribute "data-mg-required=". Example:</p>
  <form id="form2" role="form">
    <div class="form-group">
      <label class="control-label" for="name">Product name</label>
      <input type="text" data-mg-required='' class="form-control" id="name" placeholder="Enter product name">
    </div>
    <div class="form-group">
      <label class="control-label" for="price1">Product Price</label>
      <input type="text" data-mg-required='' data-mg-validator="money" class="form-control" id="price1" placeholder="Enter price">
    </div>
    <div class="form-group">
      <label class="control-label" for="length2">Book Length</label>
      <input type="text" data-mg-required='' data-mg-required='' data-mg-validator="positiveInteger" class="form-control" id="length2" placeholder="Enter book length">
    </div>
  </form>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-5">Copy</span>
  </div>
  <pre id='jmv-code-5' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example5')</pre>
  <p>You can create your custom validation by setting the following attributes:</p>
  <ul>
    <li>"data-mg-regex=": Regular expression to validate the value of a form element.</li>
    <li>"data-mg-regex-help-message=": Custom message to show the user when the value does not pass the validation.</li>
    <li>"data-mg-allowed-characters-regex": Regular expression for character restriction.</li>
  </ul>
  <p>The following example shows you how to validate an input text element for a hex number using the above attributes:</p>
  <form id="form3" role="form">
    <div class="form-group">
      <label class="control-label" for="hex">Hex number</label>
      <input type="text" data-mg-required='' data-mg-regex-help-message="Please enter a hex number, example: 12AACC" data-mg-regex='^[0-9a-fA-F]+$' class="form-control" id="hex" placeholder="Enter a hex number">
    </div>
  </form>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-6">Copy</span>
  </div>
  <pre id='jmv-code-6' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example6')</pre>
  <p>The example above allows you to enter any character, let's use the "data-mg-allowed-characters-regex" to allow only the characters that form an hex number (number from 0 to 9 and letters from A to F), fo example you won't be able to type the letter "G" in the following input text:</p>
  <form id="form4" role="form">
    <div class="form-group">
      <label class="control-label" for="hex2">Hex number</label>
      <input type="text" data-mg-required='' data-mg-allowed-characters-regex="^([0-9]|[a-f]|[A-F])$" data-mg-regex-help-message="Please enter a hex number, example: 12AACC" data-mg-regex='^[0-9a-fA-F]+$' class="form-control" id="hex2" placeholder="Enter a hex number">
    </div>
  </form>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-7">Copy</span>
  </div>
  <pre id='jmv-code-7' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example7')</pre>
  <p>Finally, to add validations to all elements of a form, with the "Form ID" you need to use the method "$('#form1').jqMgVal('addFormFieldsValidations');", as you might have notice the validation is triggered on the "focusout" event of the form elements. This is the JavaScript code needed for the above examples:</p>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-8">Copy</span>
  </div>
  <pre id='jmv-code-8' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example8')</pre>
  <div class="hidden-lg" style="margin-bottom: 5px;">
      <!-- Blog Post -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-9426377696368258"
           data-ad-slot="1616020474"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
  </div>
  <h3>Verifying if a Form is valid</h3>
  <p>Use the method $('#formId').jqMgVal('isFormValid') to verify if a form is or isn’t valid, if it is valid the method returns TRUE if isn’t valid it returns FALSE:</p>
  <form id="form5" role="form" style="margin-bottom:10px;">
    <div class="form-group">
      <label class="control-label" for="name5">Product name</label>
      <input type="text" data-mg-required='' class="form-control" id="name5" placeholder="Enter product name">
    </div>
    <div class="form-group">
      <label class="control-label" for="price5">Product Price</label>
      <input type="text" data-mg-required='' data-mg-validator="money" class="form-control" id="price5" placeholder="Enter price">
    </div>
    <button id="validate" type="button" class="btn btn-default">Click to validate!</button>
  </form>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-9">Copy</span>
  </div>
  <pre id='jmv-code-9' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example9')</pre>
  <h3>Clearing a Form</h3>
  <p>Use the method $('#formId').jqMgVal('clearForm') to clear a form:</p>
  <form id="form6" role="form" style="margin-bottom:10px;">
    <div class="form-group has-error">
      <label class="control-label" for="name5">Product name</label>
      <input type="text" data-mg-required='' class="form-control" id="name5">
    </div>
    <div class="form-group has-success">
      <label class="control-label" for="price6">Product Price</label>
      <input type="text" value="1,000.00" data-mg-required='' data-mg-validator="money" class="form-control" id="price6" placeholder="Enter price">
    </div>
    <button id="clear" type="button" class="btn btn-default">Click to clear!</button>
  </form>
  <div class="zero-clipboard">
    <span class="btn-clipboard" data-clipboard-target="jmv-code-10">Copy</span>
  </div>
  <pre id='jmv-code-10' class="prettyprint linenums:1">@include('oss-dev/jquery-mg-validation/example10')</pre>
  <h2 class="lqp-header">Aditional information</h2>
  <hr class="lqp-header-hr">
  <p>Any questions, problems or feature request feel free to open an issue on <a href="https://github.com/mgallegos/jquery-mg-validation/issues" target="_blank">GitHub</a>.</p>
  <h2 class="lqp-header">License</h2>
  <hr class="lqp-header-hr">
  <p>jQuery MG Validation Plugin is open source software licensed under the <a href="https://github.com/mgallegos/jquery-mg-validation/blob/master/LICENSE" target="_blank">MIT License</a>.</p>
</div>
<script type='text/javascript'>
  $('#form1').jqMgVal('addFormFieldsValidations');
  $('#form2,#form3,#form4,#form5,#form6').jqMgVal('addFormFieldsValidations', {'helpMessageClass':'form-group'});
  /*$('#form3').jqMgVal('addFormFieldsValidations', {'helpMessageClass':'form-group'});
  $('#form4').jqMgVal('addFormFieldsValidations', {'helpMessageClass':'form-group'});
  $('#form5').jqMgVal('addFormFieldsValidations', {'helpMessageClass':'form-group'});
  $('#form6').jqMgVal('addFormFieldsValidations', {'helpMessageClass':'form-group'});*/

  $('#validate').click(function()
  {
    if($('#form5').jqMgVal('isFormValid'))
    {
      $('#validate').html('Click to validate: Form is valid');
      $('#validate').removeClass('btn-default btn-danger').addClass('btn-success');
    }
    else
    {
      $('#validate').html('Click to validate: Form is invalid');
      $('#validate').removeClass('btn-default btn-success').addClass('btn-danger');
    }
  });

  $('#clear').click(function()
  {
    $('#form6').jqMgVal('clearForm');
  });
</script>
