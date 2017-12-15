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
              {!! Form::open(['url' => '/create']) !!}
              <th scope="row">{!! Form::text('reference', $product->reference);!!}</th>
              <td>{!! Form::text('name', $product->name);!!}</td>
              <td>{!! Form::select('brand');!!}</td>
              <td>{!! Form::select('type');!!}</td>
              <td>{!! Form::number('quantity', $product->quantity);!!}</td>
              <td>
                {!! Form::submit('Valider');!!}
                {!! Form::close() !!}
              </td>
              <td>
                {!! Form::open(['url' => '/create']) !!}
                {!! Form::submit('Valider');!!}
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
