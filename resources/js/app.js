import './bootstrap';
import 'flowbite'
import $ from 'jquery';

$('#stagiaire .updateModalButton').on("click", function () {
  let data = $(this).parent().parent().data('stagiaire');
  let $form = $('#updateProductModal').find('form').eq(0).find('input,select');
  $form.eq(1).val(data.id);
  $form.eq(2).val(data.nom);
  $form.eq(3).val(data.prenom);
  $form.eq(4).find('option').each(function () {
    if ($(this).val() === data.filiere) $(this).attr('selected', true)
  })
  $form.eq(5).find('option').filter(function () {
      return $(this).val() === data.status
    }
  ).attr('selected', true)
  $form.eq(6).val(data.date_naissance);
})


$('#stagiaire .readModalButton').on("click", function () {
  let data = $(this).parent().parent().data('stagiaire');
  const $parent = $("#readProductModal");
  $parent.find('#readID').eq(0).text(data.id);
  $parent.find('#readName').eq(0).text(data.nom + ' ' + data.prenom);
  $parent.find('#readFiliere').eq(0).text(data.filiere);
  $parent.find('#readStatus').eq(0).text(data.status);
  $parent.find('#readDateNaissance').eq(0).text(data.date_naissance);
});

$('#module .updateModalButton').on("click", function () {
  let data = $(this).parent().parent().data('module');
  let $form = $('#updateProductModal').find('form').eq(0).find('input,select');
  $form.eq(1).val(data.id);
  $form.eq(2).val(data.libelle);
  $form.eq(3).val(data.coefficient);
  $form.eq(4).find('option').filter(function () {
      return $(this).val() === data.status
    }
  ).attr('selected', true)
})

$('#module .readModalButton').on("click", function () {
  let data = $(this).parent().parent().data('module');
  const $parent = $("#readProductModal");
  $parent.find('#readID').eq(0).text(data.id);
  $parent.find('#readLibelle').eq(0).text(data.libelle);
  $parent.find('#readCoefficient').eq(0).text(data.coefficient);
  $parent.find('#readStatus').eq(0).text(data.status);
});
