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
      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        @foreach ($products as $product)
          <tr>
            <th scope="row">{{ $product->reference }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quantity }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection
