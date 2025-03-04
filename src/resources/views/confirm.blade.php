<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
         FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>confirm</h2>
      </div>
      <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address']}}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $category['content'] }}" readonly/>
                <input type="hidden" name="category_id" value="{{ $category['id'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの選択＜複数選択可＞</th>
              <td class="confirm-table__text">
              
                @foreach ($selects as $select)
              <input type="checkbox" name="select_id[]" value="{{ $select->id }}"> {{ $select->select }}
              @endforeach
           
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirms-table__row">
              <th class="confirm-table__header">画像ファイル内容</th>
              <td class="confirm-table__text">
                <img src="{{ '/storage/' . $contact['image'] }}">
                <input type="hidden" name="image" value="{{ $contact['image'] }}">
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
        <form class="form__correction" action="/" method="get">
          @csrf
            <button class="form__button-submit" type="submit">修正</button>
        </form>
    </div>
  </main>
</body>

</html>
