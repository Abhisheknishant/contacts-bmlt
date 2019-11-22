<h2>Instructions</h2>
<p> Please open a ticket <a href="https://github.com/bmlt-enabled/contacts-bmlt/issues" target="_top">https://github.com/bmlt-enabled/contacts-meetings-bmlt/issues</a> with problems, questions or comments.</p>
<div id="contacts_bmlt_accordion">
    <h3 class="help-accordian"><strong>Basic</strong></h3>
    <div>
        <p>[contacts_bmlt root_server=&quot;https://www.domain.org/main_server&quot;]</p>
        <strong>Attributes:</strong> root_server, display_type
        <p><strong>Shortcode parameters can be combined.</strong></p>
    </div>
    <h3 class="help-accordian"><strong>Shortcode Attributes</strong></h3>
    <div>
        <p>The following shortcode attributes may be used.</p>
        <p><strong>root_server</strong></p>
        <p><strong>display_type</strong></p>
        <p>A minimum of root_server attribute is required.</p>
        <p>Ex. [contacts_bmlt root_server=&quot;https://www.domain.org/main_server&quot;]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- root_server</strong></h3>
    <div>
        <p><strong>root_server (required)</strong></p>
        <p>The url to your BMLT root server.</p>
        <p>Ex. [contacts_bmlt root_server=&quot;https://www.domain.org/main_server&quot;]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- display_type</strong></h3>
    <div>
        <p><strong>display_type</strong></p>
        <p>To change the display type add display_type="table" there are three different types <strong>simple</strong>, <strong>table</strong>, <strong>block</strong></p>
        <p>Ex. [contacts_bmlt root_server=&quot;https://www.domain.org/main_server&quot; display_type=&quot;table&quot;]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- parent_id</strong></h3>
    <div>
        <p><strong>parent_id</strong></p>
        <p>This will only display service bodies who has set parent_id.</p>
        <p>Ex. [contacts_bmlt root_server=&quot;https://www.domain.org/main_server&quot; parent_id=&quot;22&quot;]</p>
    </div>
    <div>
        <p><strong>show_description</strong></p>
        <p>This will display the service bodies description underneath the name if set..</p>
        <p>Ex. [contacts_bmlt root_server=&quot;https://www.domain.org/main_server&quot; show_description=&quot;1&quot;]</p>
    </div>
</div>
