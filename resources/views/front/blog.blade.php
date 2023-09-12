@extends('front.layout')

@push('styles')
@endpush

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Blog</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 posts-list">
                @foreach($data['data'] as $item)
                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="{{ asset($item->img) }}" alt="Image of {{ $item->title }}" class="img-fluid">
                        </div>

                        <p class="post-category">{{ $item->cat }}</p>

                        <h2 class="title">
                            <a href="{{ url('post').'/'.$item->slug }}">{{ $item->title }}</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-date">
                                    <time datetime="2022-01-01">{{ $item->created_at }}</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->
                @endforeach


            </div><!-- End blog posts list -->

            <!-- <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div> -->

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
