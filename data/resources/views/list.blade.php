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
      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        @foreach ($products as $product)
          <tr>
            <th scope="row">{{ $product->reference }}</th>
            {{ $id = $product->id }}
            <td>{{ $product->name }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
              {!! Form::open(['url' => '/update/{{ $id }}']) !!}
              {!! Form::submit('Editer');!!}</td>
              {!! Form::close() !!}
            <td>
              {!! Form::open(['url' => '/delete/{{ $id }}']) !!}
              {!! Form::submit('Supprimer');!!}
              {!! Form::close() !!}
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
          {!! Form::close() !!}
        </tr>
    </tbody>
  </table>
@endsection
