@extends('layouts.main')

@section('title', '店舗情報')

@section('content')
    <h1>店舗情報</h1>

    <form>
        <div>
            <label for="name">店舗名:</label>
            <input type="text" name="name" id="name" value="{{ $shop->name }}" readonly>
        </div>
        <div>
            <label for="description">詳細:</label>
            <textarea name="description" id="description" cols="30" rows="10" readonly>{{ $shop->description }}</textarea>
        </div>
        <div>
            <label for="address">住所:</label>
            <input type="text" name="address" id="address" value="{{ $shop->address }}" readonly>
        </div>
    </form>

    <div id="map" style="height:50vh;"></div>

    <a href="{{ route('shops.index') }}">一覧画面</a>
    <a href="{{ route('shops.edit', $shop) }}">編集</a>
    <form action="{{ route('shops.destroy', $shop) }}" method="post" name="form1" style="display: inline">
        @csrf
        @method('delete')
        <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
    </form>
@endsection

@section('script')
    @include('partial.map')
@endsection
