$(document).ready(function() {

  $('.selectFilter').select2({
    placeholder: 'Search for a product',
    ajax: {
        url: function() {
            return $(this).data('route')
        },
        dataType: 'json',
        delay: 250,
        data: function(params) {
            return {
                search: params.term,
                page: params.page || 1 // Adicionado para lidar com a paginação
            };
        },
        processResults: function(data) {
            return {
                results: data.data,
                pagination: {
                    more: data.current_page < data.last_page
                }
            };
        },
        cache: true
    },
    templateResult: formatProduct,
    escapeMarkup: function(markup) {
        return markup;
    }
});

});

function formatProduct(product) {
  if (product.loading) {
      return product.text;
  }

  var template = $('<span class="d-flex w-100"></span>');

  template.append(`
    <div class="col-3">
      <img class="img-fluid w-100" src="${product.image_path}" class="option-image" />
    </div>
  `);

  template.append(`
    <div class="col-9 p-3">
      <span class="option-name">${product.text}</span>
      <span class="option-description">${product.description}</span>
    </div>
  `);
  template.append('');
  
  return template;
}