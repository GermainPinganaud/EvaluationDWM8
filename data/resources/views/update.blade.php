@extends ('layouts.base')
{{-- Title --}}
@section ('title')
  Liste des stocks
@endsection
{{-- Content --}}

@section ('content')
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Référence</th>
        <th scope="col">Produit</th>
        <th scope="col">Constructeur</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Stock disponible</th>
        <th scope="col"> </th>
        <th scope="col"> </th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        @foreach ($products as $product)
          @if($id == $product->id)
            <tr class="table-active">
              {{ Form::open(['action' => ['ProductController@updateOneAction', $product->id]])}}
              <th scope="row">{!! Form::text('reference', $product->reference);!!}</th>
              {{ Form::hidden('id', $product->id) }}
              <td>{!! Form::text('name', $product->name);!!}</td>
              <td>{!! Form::select('brand', $brands);!!}</td>
              <td>{!! Form::select('category', $categories);!!}</td>
              <td>{!! Form::number('quantity', $product->quantity);!!}</td>
              <td>
                {!! Form::submit('Valider');!!}
                {!! Form::close() !!}
              </td>
              <td>
                {{ Form::open(['action' => ['ProductController@read', $product->id]])}}
                {!! Form::submit('Annuler');!!}
                {!! Form::close() !!}
              </td>
          @else
              <tr>
                <th scope="row">{{ $product->reference }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->quantity }}</td>
                <td> </td>
                <td> </td>
              </tr>
          @endif
            </tr>
      @endforeach
    </tbody>
  </table>
@endsection
