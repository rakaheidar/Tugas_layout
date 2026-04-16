<?= $this->include('components/header') ?>

<?= $this->include('components/sidebar') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1><?= isset($title) ? esc($title) : 'Dashboard' ?></h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
        <?php if (isset($breadcrumb)) : ?>
          <?php foreach ($breadcrumb as $crumb) : ?>
            <li class="breadcrumb-item <?= isset($crumb['active']) && $crumb['active'] ? 'active' : '' ?>">
              <?php if (isset($crumb['url'])) : ?>
                <a href="<?= $crumb['url'] ?>"><?= $crumb['title'] ?></a>
              <?php else : ?>
                <?= $crumb['title'] ?>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Content Area -->
      <?= $this->renderSection('content') ?>

    </div>
  </section>

</main><!-- End #main -->

<?= $this->include('components/footer') ?>