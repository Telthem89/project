@extends('layouts.app')

@section('content')

<!-- /post/store -->
 <div class="panel panel-primary">
     <div class="panel-heading">List of  Categories</div>
</div>

     <table class="table table-bordered table-inverse table-hover">
         <thead>
             <tr>
                 <th>Category Name</th>
             
                 <th>Editing</th>
             
                 <th>deleting</th>
             </tr>
         </thead>
         <tbody>
            @if($categories->count()>0)
            @foreach($categories as $category)
             <tr>
                 <td>{{ $category->name }}</td>
                 <td><a class="btn btn-success btn-sm" href="{{route('category.edit',['id'=>$category->id])}}"><i class="fa fa-pencil"></i></a></td>
                 <td><a class="btn btn-danger btn-sm" href="{{route('category.delete', ['id'=>$category->id])}}"><i class="fa fa-trash"></i></a></td>
             </tr>
             @endforeach 
              @else
             <tr>
                    <th colspan="5" class ="text-center" style="color:red; font-weight: bold;" >No Category :)</th>
                </tr>
         </tbody>
     </table>
 @endif
@endsection