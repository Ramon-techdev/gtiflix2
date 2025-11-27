<x-base-layout>

<!-- Team -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Our leadership</h2>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-12">
    @foreach($atores as $atores)
    <!-- End Col -->


    <!-- End Col -->


    <!-- End Col -->
@endforeach

    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://outraspalavras.net/wp-content/uploads/2014/01/150125-Scorcese.jpg" alt="Avatar">
      <div class="mt-2 sm:mt-4">
        <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
          {{$atores->nome}}
        </h3>
        <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
          O lobo de Wall Street
        </p>
      </div>
    </div>
    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://cdn.observatoriodocinema.com.br/2019/11/fin04_jw3_1sht_johnwick_vf.0.jpg" alt="Avatar">
      <div class="mt-2 sm:mt-4">
        <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
          Keanu Reeves
        </h3>
        <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
          Jonh Wick
        </p>
      </div>
    </div>
    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://i.dailymail.co.uk/i/pix/scaled/2014/12/30/2455711F00000578-0-image-a-16_1419969894692.jpg" alt="Avatar">
      <div class="mt-2 sm:mt-4">
        <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
          Tom Hardy
        </h3>
        <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
          Mad Max
        </p>
      </div>
    </div>
    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://i.pinimg.com/564x/3f/9d/a0/3f9da05d2d99497de94bb57f17993bef.jpg" alt="Avatar">
      <div class="mt-2 sm:mt-4">
        <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
          Tom Cruise
        </h3>
        <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
          O último Samurai
        </p>
      </div>
    </div>
    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://conteudo.imguol.com.br/c/entretenimento/d8/2017/06/15/homem-aranha-tobey-maguire-1497567452450_v2_3x4.jpg" alt="Avatar">
      <div class="mt-2 sm:mt-4">
        <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
          Tobey Maguire
        </h3>
        <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
          Spider-man
        </p>
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Team -->

</x-base-layout>
