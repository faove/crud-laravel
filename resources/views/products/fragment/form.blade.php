<div class="form-group">
	{!! Form::Label('name','Nombre del Producto') !!}
	{!! Form::text('name',null,['class' =>'form-control'])  !!}
</div>

<div class="form-group">
	{!! Form::Label('short','Descripcion breve del Producto') !!}
	{!! Form::text('short',null,['class' =>'form-control'])  !!}
</div>


<div class="form-group">
	{!! Form::Label('body','Descripcion del Producto') !!}
	{!! Form::textarea('body',null,['class' =>'form-control'])  !!}
</div>

<div>
	{!! Form::date('fecha', \Carbon\Carbon::now()) !!}
</div>
<div>
	{!! Form::select('size', ['L' => 'Large', 'S' => 'Small']) !!}
	{!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}
	{!!	Form::select('animal',['Cats' => ['leopard' => 'Leopard'],'Dogs' => ['spaniel' => 'Spaniel'],]) !!}
</div>
<div>
	
	{!! Form::selectRange('number', 10, 20) !!}
	{!! Form::selectMonth('month') !!}

</div>



<div class="form-group">
	
	{!! Form::submit('Enviar',['class' =>'btn btn-primary'])  !!}
	
</div>