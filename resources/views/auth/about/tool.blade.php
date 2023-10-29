@extends('layouts.app')

@section('content')

<article class="container">
    <p>{{ Breadcrumbs::render('tool') }}</p>
    <h2 class="panel-heading">使用ツール変更</h2>
    @foreach($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
    <form action="{{ route('admin.addTools') }}" method="post">
        {{ csrf_field() }}
        <div>
            <label for="skill">スキル登録</label>
            <input type="text" name="skill" id="skill">
        </div>
        <div>
            <label for="usableTool">ツール選択</label>
            <select name="tool_id" id="usableTool">
                @foreach($usableTools as $usableTool)
                    <option value="{{$usableTool->id}}">{{ $usableTool->tool }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
    <ul>
        @foreach($usableTools as $usableTool)
            <h4>{{ $usableTool->tool }}</h4>
            @foreach($usableTool->tools as $tool)
                <li>{{ $tool->skill }}</li>
                <form action="{{ route('admin.deleteTool', $tool->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="submit" value="Delete" onclick="return confirm('使用ツールを削除しますか?')">
                </form>
            @endforeach
        @endforeach
    </ul>
    <div>
        <a href="{{ route('admin.about') }}">Back</a>
    </div>
</article>

@endsection
