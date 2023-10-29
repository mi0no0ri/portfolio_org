@extends('layouts.app')

@section('content')

<article class="container">
    <p>{{ Breadcrumbs::render('language') }}</p>
    <h2 class="panel-heading">使用言語変更</h2>
    @foreach($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
    <form action="{{ route('admin.addLanguage') }}" method="post" class="useLanguageRegister">
        {{ csrf_field() }}
        <div>
            <label for="language">使用言語登録</label>
            <input type="text" name="language" id="language" class="useLanguageRegisterInput">
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
    <ul>
        @foreach($langs as $index=>$lang)
            <div class="useLanguageList">
                <h4>{{ $lang->language }}</h4>
                <div class="useLanguageBtn">
                    <button id="addFrameworkBtn{{$index}}">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <form action="{{ route('admin.deleteLanguage', $lang->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button onclick="return confirm('使用言語を削除しますか?')" name="language">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
            <form action="{{ route('admin.addFramework', $lang->id) }}" method="post" class="addFrameworkInput hidden" id="addFrameworkWrap{{$index}}">
                {{ csrf_field() }}
                <input type="hidden" name="language_id" value="{{ $lang->id }}">
                <input type="text" name="framework" class="addFramework">
                <input type="submit" value="Add">
            </form>
            @foreach($lang->lang_frames as $framework)
                <div class="useLanguageList">
                    <h5> - {{ $framework->usableFramework->framework }}</h5>
                    <form action="{{ route('admin.deleteLanguage', $framework->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button onclick="return confirm('フレームワークを削除しますか?')" name="framework">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            @endforeach
        @endforeach
    </ul>
    <div>
        <a href="{{ route('admin.about') }}">Back</a>
    </div>
</article>

@endsection

@section('script')

<!-- 【管理者】使用フレームワーク登録 -->
<script>
    const langs = @json($langs);
    $(function(){
        $.each(langs, function(index){
            $('#addFrameworkBtn' + index).on('click', function(){
                $('#addFrameworkWrap' + index).toggleClass('hidden');
            });
        })
    });
</script>

@endsection
