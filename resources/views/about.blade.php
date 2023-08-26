@extends('toppage')

@section('contents')

<article class="introduce fadeIn">
  <h2>About</h2>
  <div>
    <div class="aboutContents">
      <div class="myImage">
        <img src="{{ asset('storage/'.$user->image) }}" alt="" class="aboutImage">
        <div class="aboutName">
          <h4>NAME：</h4>
          <p>minori</p>
        </div>
      </div>
      <div class="aboutIntroduce">
        <!-- 経歴 -->
        <h4>経歴</h4>
        <ul>
          @foreach($userInfo as $carriers)
            @foreach($carriers->carriers as $carrier)
              <li>{{ $carrier->carrier}}</li>
            @endforeach
          @endforeach
        </ul>
        <!-- 自己紹介 -->
        <h4>自己紹介</h4>
        <p>{{ $user->introduce }}</p>
        <!-- 趣味 -->
        <h4>趣味</h4>
        <ul>
          @foreach($userInfo as $hobbies)
            @foreach($hobbies->hobbies as $hobby)
              <li>{{ $hobby->hobby }}</li>
            @endforeach
          @endforeach
        </ul>
        <!-- 資格 -->
        <h4>資格</h4>
        <ul>
          @foreach($certifications as $certification)
            <li>{{ $certification->date->format('Y年m月') }}　{{ $certification->certification }}　取得</li>
          @endforeach
        </ul>
      </div>
    </div>
    <!-- 使用言語 -->
    <div>
      <div class="mySkill">
        <h4>使用言語</h4>
        <ul class="mySkillMenu">
          <li class="htmlcss">HTML/CSS</li>
          <li class="javascript">JavaScript(jQuery)</li>
          <li class="php">PHP(Laravel)</li>
          <li class="java">Java(Springboot)</li>
        </ul>
      </div>
      <div class="aboutLanguageList">
        <ul>
          @foreach($skills as $skill)
            @for($i = 1; $i <= 8; $i++)
              @if($skill->language_id == $i)
              <div class="language language{{ $i }} hidden">
                <li>{{ $skill->skill }}</li>
              </div>
              @break
              @endif
            @endfor
          @endforeach
        </ul>
        <div class="moreLink">
          <a href="{{ route('work') }}">作品毎の機能はこちら</a>
        </div>
      </div>
    </div>
    <!-- 使用ツール -->
    <div>
      <div class="myTool">
        <h4>使用ツール</h4>
        <ul class="myToolMenu">
          <li class="os">OS</li>
          <li class="db">DB</li>
          <li class="communicate">Communicate</li>
          <li class="other">Other</li>
        </ul>
      </div>
      <div class="aboutToolList">
        <ul>
          @foreach($tools as $tool)
            @for($i = 1; $i <= 8; $i++)
              @if($tool->tool_id == $i)
              <div class="tool tool{{ $i }} hidden">
                <li>{{ $tool->skill }}</li>
              </div>
              @break
              @endif
            @endfor
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="return">
    <a href="{{ route('top') }}">TOP</a>
  </div>
</article>

@endsection
