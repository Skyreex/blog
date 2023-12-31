import './bootstrap';
import 'flowbite'
import "html2pdf"
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
  $parent.find('a#bulletin').eq(0).attr("href", "editer/" + data.id)
  console.log($parent.find('a#bulletin').eq(0).attr("href"))
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

$('#note .updateModalButton').on("click", function () {
  let data = $(this).parent().parent().data('note');
  let $form = $('#updateProductModal').find('form').eq(0).find('input,select');
  $form.eq(1).val(data.id);
  $form.eq(2).find('option').filter(function () {
      return $(this).val() == data.stagiaire_id
    }
  ).attr('selected', true)
  $form.eq(3).find('option').filter(function () {
      return $(this).val() == data.module_id
    }
  ).attr('selected', true)
  $form.eq(4).val(data.note);
  $form.eq(5).val(data.date_exam);
})

$('#note .readModalButton').on("click", function () {
  let data = $(this).parent().parent().data('note');
  const $parent = $("#readProductModal");
  $parent.find('#readID').eq(0).text(data.id);
  $parent.find('#readName').eq(0).text(data.stagiaire.nom + ' ' + data.stagiaire.prenom);
  $parent.find('#readModule').eq(0).text(data.module.libelle);
  $parent.find('#readNote').eq(0).text(data.note);
  $parent.find('#readDateExam').eq(0).text(data.date_exam);
});

const bulletin = document.querySelector("#bulletin");
$("#printBTN").on("click", function () {
  console.log("clicked")
  html2pdf(bulletin, {
    margin: 10,
    filename: "moyenne.pdf",
    image: {
      type: "jpeg",
      quality: 0.98,
    },
    html2canvas: {
      scale: 2,
    },
    jsPDF: {
      unit: "mm",
      format: "a4",
      orientation: "portrait",
    },
  }).then(function (pdf) {
    var blob = pdf.output("blob");
    var url = URL.createObjectURL(blob);
    var a = document.createElement("a");
    a.href = url;
    a.download = "invitation.pdf";
    a.click();
    URL.revokeObjectURL(url);
  });
})
console.log($("#printBTN"))
