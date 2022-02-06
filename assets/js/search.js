---

---

var index = lunr(function () {
    this.field('img')
    this.ref('id')
});

{% assign count = 0 %}

var store = [];

{% for gallery in site.data.galleries %}
  {% assign gallery = gallery-hash[1] %}

  {% for item in gallery[1].images %}
      index.add({
          img: "{{ item.img }}",
          id: {{ count }}
      })

      store.push({
        'img': "{{ item.img }}",
        'path': "{{ gallery[1].dir }}"
      })

      {% assign count = count | plus: 1 %}
  {% endfor %}
{% endfor %}

$(document).ready(function() {
  $('<div id="results">')
    .prependTo('.gallery');

  $('input#search-term').click(function () {
    $(this).val('');
  });

  $('input#search-term').on('keyup', function () {
    var resultdiv = $('#results');
    var query = $(this).val();
    var result = index.search(query);
    resultdiv.empty();
    resultdiv.prepend('<p class="">Found '+result.length+' result(s)</p>');
    
    for (var item in result) {
      var ref = result[item].ref;
      var img = store[ref].path + store[ref].img;
      var thm = store[ref].path + 'thms/thm_' + store[ref].img;
      var searchitem = '<div class="result"><a href="'+img+'"><img src="'+thm+'" /></a></div><hr />';
      resultdiv.append(searchitem);
    }
  });
});
