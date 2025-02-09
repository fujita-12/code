const plans = [
  {
    area: 'アジア',
    country: '韓国',
    plan1: '100',
    plan2: '200',
    plan3: '300',
    plan4: '400',
  },
  {
    area: '北アメリカ',
    country: 'アメリカ',
    plan1: '150',
    plan2: '250',
    plan3: '350',
    plan4: '450',
  },
  {
    area: '北アメリカ',
    country: 'カナダ',
    plan1: '160',
    plan2: '260',
    plan3: '360',
    plan4: '460',
  },
  {
    area: 'アジア',
    country: 'タイ',
    plan1: '170',
    plan2: '270',
    plan3: '370',
    plan4: '470',
  },
  {
    area: 'ヨーロッパ',
    country: 'フランス',
    plan1: '180',
    plan2: '280',
    plan3: '380',
    plan4: '480',
  },
  {
    area: '南アメリカ',
    country: 'ブラジル',
    plan1: '180',
    plan2: '280',
    plan3: '380',
    plan4: '480',
  },
];

// 探したい国名とパスと画像名をまとめておく
const obj = [
  {
    country_name: 'アメリカ',
    path_name: 'america',
    img_name: 'usa',
  },
  {
    country_name: 'フランス',
    path_name: 'france',
    img_name: 'fra',
  },
  {
    country_name: '韓国',
    path_name: 'korea',
    img_name: 'kor',
  },
];

// エリアのセレクトボックスの中身を生成
function selectListAreas(countryListAreas) {
  var select_area = $('select[name="_areas"]');
  select_area.empty();

  var default_option = `<option disabled selected>エリアを選択してください</option>`;
  select_area.append(default_option);

  // 重複をなくしたエリアリストを作成
  var uniqueAreas = [...new Set(countryListAreas.map(country => country.area))];

  $(uniqueAreas).each(function(index, area) {
    var country_name = `<option value="${area}">${area}</option>`;
    select_area.append(country_name);
  });
}

// 国名のセレクトボックスの中身を生成
function selectListCountries(countryListCountries) {
  var select_country = $('select[name="_countries"]');
  select_country.empty();

  var default_option = `<option disabled selected>国名を選択してください</option>`;
  $('select[name="_countries"]').append(default_option);
  
  $(countryListCountries).each(function(index, country) {
    var country_name = `<option value="${country.country}">${country.country}</option>`;
    $('select[name="_countries"]').append(country_name);
  });
}

// エリアのセレクトボックスで選択したエリアを取得
function getAreaSelect(area) {
  var areaData = plans.filter(target => target.area === area);
  return areaData;
}

// 国名のセレクトボックスで選択した国名を取得
function getCountrySelect(country) {
  var countryData = plans.filter(target => target.country === country);
  return countryData;
}

// 国名が一致するかチェックしてデータを返す
function checkCountry(elem) {
  var countryData = obj.find(target => target.country_name === elem.country);
  return countryData;
}

// 表を生成
function createTableList(countryList) {
  $(countryList).each(function(index, element) {

    var countryData = checkCountry(element);

    var countryContent;
    if(countryData) {
      countryContent = `
        <a href="/${countryData.path_name}">
          <img src="/img/${countryData.img_name}.svg" alt="${element.country}" width="30">
          ${element.country}
        </a>
      `;
    }else {
        countryContent = element.country;
    }

    var tr = `
      <tr>
        <th>${countryContent}</th>
        <td>${element.plan1}</td>
        <td>${element.plan2}</td>
        <td>${element.plan3}</td>
        <td>${element.plan4}</td>
      </tr>
    `;
    $('#table-body').append(tr);

    var content_sp = `
      <div class="list-item">
        <div class="country-name">${countryContent}</div>
        <div class="list-flex">
          <div>300MB</div>
          <div>500MB</div>
          <div>1GB</div>
          <div>無制限</div>
          <div>${element.plan1}</div>
          <div>${element.plan2}</div>
          <div>${element.plan3}</div>
          <div>${element.plan4}</div>
        </div>
      </div>
    `;
    $('.list-wrap-sp').append(content_sp);
  });
}

$(function() {
  selectListAreas(plans);
  selectListCountries(plans);
  createTableList(plans);

  $('select[name="_countries"],select[name="_areas"]').on('change', function() {
    $('#table-body tr:nth-child(n+2)').remove();
    $('.list-wrap-sp .list-item').remove();

    var selectBoxArea = $('select[name="_areas"]');
    var selectBoxCountry = $('select[name="_countries"]');

    var selectedArea = selectBoxArea.val();
    var selectedCountry = selectBoxCountry.val();
    
    if(selectedArea && selectedCountry == null) {
      var getArea = getAreaSelect(selectedArea);
      selectListCountries(getArea);
      createTableList(getArea);
    }else if(selectedArea == null && selectedCountry) {       
      var getCountry = getCountrySelect(selectedCountry);
      selectBoxArea.val(getCountry[0].area);
      createTableList(getCountry);
    }else if(selectedArea && selectedCountry) {
      if($(this).attr('name') == '_areas') {
        selectBoxCountry.val('国名を選択してください');
        var getArea = getAreaSelect(selectedArea);
        selectListCountries(getArea);
        createTableList(getArea);
      }else {
        var getCountry = getCountrySelect(selectedCountry);
        selectBoxArea.val(getCountry[0].area);
        createTableList(getCountry);
      }
    }   
  });
});

