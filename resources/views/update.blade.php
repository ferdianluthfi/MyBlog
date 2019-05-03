@extends('layouts.app')

@section('content')

@foreach($content as $con)
<form action="/update" method="post" id="editForm">
			
			<h1 style="text-align:center;">Change Content</h1>
            {{ csrf_field() }}
            
            <input type="hidden" name="id" value="{{ $con->id }}"> <br/>

            <div class="content bg1">
						<span class="labels">Title</span>
						<input class="inputs" readonly="readonly" type="text" name="title" value="{{ $con->title }}" data-error=".errorName">
						<div class="errorMessage errorName"></div>
            </div>
            
            
            <div class="content bg1">
						<span class="labels">Content</span>
						<textarea class="inputs" type="text" name="content" style="height:150px" data-error=".errorDescription"> {{ $con->content }} </textarea>
						<div class="errorMessage errorDescription"></div>
            </div>
            
            <div class="container-btn">
					<button class="container-form-btn" id="simpan">
							<span>
								save
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
					</button>
			</div>
</form>
@endforeach
@endsection