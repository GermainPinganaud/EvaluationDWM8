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
          <tr>
            <th scope="row">{{ $product->reference }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
              <div>
                {{ Form::open(['action' => ['ProductController@updateOne', $product->id]])}}
                {!! Form::submit('Editer');!!}
                {!! Form::close() !!}
              </div>
            </td>
            <td>
              <div class="col-sm-1">
                {{ Form::open(['action' => ['ProductController@deleteOne', $product->id]])}}
                {!! Form::submit('Supprimer');!!}
                {!! Form::close() !!}
              </div>
            </td>
          </tr>
          {!! Form::close() !!}
      @endforeach
      <tr class="table-active">
        <tr>
          {!! Form::open(['url' => '/create']) !!}
          <th scope="row">{!! Form::text('reference');!!}</th>
          <td>{!! Form::text('name');!!}</td>
          <td>{!! Form::select('brand');!!}</td>
          <td>{!! Form::select('type');!!}</td>
          <td>{!! Form::number('quantity');!!}</td>
          <td>{!! Form::submit('Ajouter');!!}</td>
          <td> </td>
          {!! Form::close() !!}
        </tr>
    </tbody>
  </table>
@endsection
