<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a  class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h1>Contact</h1>
            </div>
            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-last_name">
                            <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                        </div>
                        <div class="form__input-first_name">
                            <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
                        </div>
                        <div class="form__error">
                            @error('last_name,first_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--gender">
                            <input type="radio" name="gender" value="男性" checked />男性
                            <input type="radio" name="gender" value="女性"/>女性
                            <input type="radio" name="gender" value="その他"/>その他
                        </div>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--email">
                            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--tel">
                            <div class="form__input--tel1">
                                <input type="tel" name="tel" placeholder="080" value="{{ old('tel1') }}" />
                            </div>
                            <div class="form__input-tel__underscore">-</div>
                            <div class="form__input--tel2">
                                <input type="tel" name="tel" placeholder="1234" value="{{ old('tel2') }}" />
                            </div>
                            <div class="form__input-tel__underscore">-</div>
                            <div class="form__input--tel3">
                                <input type="tel" name="tel" placeholder="5678" value="{{ old('tel3') }}" />
                            </div>
                        </div>
                        <div class="form__error">
                            @error('tel')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--address">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--building">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                        </div>
                        <div class="form__error">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <select class="form__select--type" name="select">
                            <option value="選択して下さい" placeholder="選択してください" value="{{ old('select') }}">選択してください</option>
                            <option value="商品のお届けについて">商品のお届けについて</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="商品トラブル">商品トラブル</option>
                            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                            <option value="その他">その他</option>
                        </select>
                        <div class="form__error">
                            @error('select')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{ old('content') }}"></textarea>
                        </div>
                        <div class="form__error">
                            @error('content')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>