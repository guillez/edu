@extends('vendor.crud.single-page-templates.common.app')

@section('content')

	<h2>Bancos</h2>

	@include('banco.create')

	<table class="table table-striped grid-view-tbl">
	    
	    <thead>
		<tr class="header-row">
			{!!\Nvd\Crud\Html::sortableTh('id','banco.index','Id')!!}
			{!!\Nvd\Crud\Html::sortableTh('nombre','banco.index','Nombre')!!}
			{!!\Nvd\Crud\Html::sortableTh('created_at','banco.index','Created At')!!}
			{!!\Nvd\Crud\Html::sortableTh('updated_at','banco.index','Updated At')!!}
			<th></th>
		</tr>
		<tr class="search-row">
			<form class="search-form">
				<td><input type="text" class="form-control" name="id" value="{{Request::input("id")}}"></td>
				<td><input type="text" class="form-control" name="nombre" value="{{Request::input("nombre")}}"></td>
				<td><input type="text" class="form-control" name="created_at" value="{{Request::input("created_at")}}"></td>
				<td><input type="text" class="form-control" name="updated_at" value="{{Request::input("updated_at")}}"></td>
				<td style="min-width: 6em;">@include('vendor.crud.single-page-templates.common.search-btn')</td>
			</form>
		</tr>
	    </thead>

	    <tbody>
	    	@forelse ( $records as $record )
		    	<tr>
					<td>
						{{ $record->id }}
						</td>
					<td>
						<span class="editable"
							  data-type="text"
							  data-name="nombre"
							  data-value="{{ $record->nombre }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/banco/{{ $record->{$record->getKeyName()} }}"
							  >{{ $record->nombre }}</span>
						</td>
					<td>
						{{ $record->created_at }}
						</td>
					<td>
						{{ $record->updated_at }}
						</td>
					@include( 'vendor.crud.single-page-templates.common.actions', [ 'url' => 'banco', 'record' => $record ] )
		    	</tr>
			@empty
				@include ('vendor.crud.single-page-templates.common.not-found-tr',['colspan' => 5])
	    	@endforelse
	    </tbody>

	</table>

	@include('vendor.crud.single-page-templates.common.pagination', [ 'records' => $records ] )

<script>
	$(".editable").editable({ajaxOptions:{method:'PUT'}});
</script>
@endsection