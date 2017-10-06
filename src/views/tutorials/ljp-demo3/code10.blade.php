&lt;div id='form-section' class="collapse">
  &lt;div class="form-container">
    @{{ Form::open(array('id' => 'book-form', 'url' => URL::to('/'), 'role' => 'form', 'class' => 'form-horizontal', 'onsubmit' => 'return false;')) }}
      &lt;fieldset id="books-form-fieldset">
        &lt;legend id="form-new-title" class="hidden">Add a new book&lt;/legend>
        &lt;legend id="form-edit-title" class="hidden">Edit an existing book&lt;/legend>
        &lt;div class="form-group" id='test'>
          @{{ Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')) }}
          &lt;div class="col-sm-10">
            &lt;div class="input-group">
              &lt;span class="input-group-addon">
                &lt;i class="fa fa-book">&lt;/i>
              &lt;/span>
              @{{ Form::text('name', null , array('id' => 'name', 'class' => 'form-control', 'data-mg-required' => '')) }}
              @{{ Form::hidden('id', null, array('id' => 'id')) }}
            &lt;/div>
          &lt;/div>
        &lt;/div>
        &lt;div class="form-group">
          @{{ Form::label('description', 'Description', array('class' => 'col-sm-2 control-label')) }}
          &lt;div class="col-sm-10">
            @{{ Form::textarea('description', null , array('id' => 'description', 'class' => 'form-control', 'rows' => 3)) }}
          &lt;/div>
        &lt;/div>
        &lt;div class="form-group">
          @{{ Form::label('author', 'Author', array('class' => 'col-sm-2 control-label')) }}
          &lt;div class="col-sm-10">
            &lt;div class="input-group">
              &lt;span class="input-group-addon">
                &lt;i class="fa fa-user">&lt;/i>
              &lt;/span>
              @{{ Form::text('author', null , array('id' => 'author', 'class' => 'form-control', 'data-mg-required' => '')) }}
            &lt;/div>
          &lt;/div>
        &lt;/div>
        &lt;div class="form-group">
          @{{ Form::label('language', 'Language', array('class' => 'col-sm-2 control-label')) }}
          &lt;div class="col-sm-10">
            &lt;div class="input-group">
              &lt;span class="input-group-addon">
                &lt;i class="fa fa-language">&lt;/i>
              &lt;/span>
              @{{ Form::select('language', array('E' => 'English', 'S' => 'Spanish', 'G' => 'German'), null , array('id' => 'language', 'class' => 'form-control')) }}
            &lt;/div>
          &lt;/div>
        &lt;/div>
        &lt;div class="form-group">
          @{{ Form::label('publisher', 'Publisher', array('class' => 'col-sm-2 control-label')) }}
          &lt;div class="col-sm-10">
            &lt;div class="input-group">
              &lt;span class="input-group-addon">
                &lt;i class="fa fa-briefcase">&lt;/i>
              &lt;/span>
              @{{ Form::text('publisher', null , array('id' => 'publisher', 'class' => 'form-control', 'data-mg-required' => '')) }}
            &lt;/div>
          &lt;/div>
        &lt;/div>
        &lt;div class="form-group">
          @{{ Form::label('length', 'Print Length', array('class' => 'col-sm-2 control-label')) }}
          &lt;div class="col-sm-10 mg-hm">
            &lt;div class="input-group">
              &lt;span class="input-group-addon">
                &lt;i class="fa fa-print">&lt;/i>
              &lt;/span>
              @{{ Form::text('length', null , array('id' => 'length', 'class' => 'form-control', 'data-mg-required' => '', 'data-mg-validator' => 'positiveInteger')) }}
            &lt;/div>
          &lt;/div>
        &lt;/div>
        &lt;div class="form-group">
          @{{ Form::label('asin', 'ASIN', array('class' => 'col-sm-2 control-label')) }}
          &lt;div class="col-sm-10">
            &lt;div class="input-group">
              &lt;span class="input-group-addon">
                &lt;i class="fa fa-barcode">&lt;/i>
              &lt;/span>
              @{{ Form::text('asin', null , array('id' => 'asin', 'class' => 'form-control', 'data-mg-required' => '')) }}
            &lt;/div>
          &lt;/div>
        &lt;/div>
      &lt;/fieldset>
    @{{ Form::close() }}
  &lt;/div>
&lt;/div>
