<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-fluid px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="file-text"></i></div>
                                            Edit Post
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary" href="<?= base_url('C_admin/m_event') ?>">
                                            <i class="me-1" data-feather="arrow-left"></i>
                                            Back to All Posts
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-fluid px-4">
                        <div class="row gx-4">
                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-header">Post Title</div>
                                    <div class="card-body"><input class="form-control" id="postTitleInput" type="text" placeholder="Enter your post title..." value="Boots on the Ground, Inclusive Thought Provoking Ideas" /></div>
                                </div>
                                <div class="card card-header-actions mb-4">
                                    <div class="card-header">
                                        Post Preview
                                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left" title="The post preview text shows below the post title, and is the post summary on blog pages."></i>
                                    </div>
                                    <div class="card-body"><textarea class="lh-base form-control" type="text" placeholder="Enter your post preview text..." rows="4">Empower communities and energize engaging ideas; scale and impact do-gooders while disrupting industries. Venture philanthropy benefits corporations and people by moving the needle.</textarea></div>
                                </div>
                                <div class="card card-header-actions mb-4 mb-lg-0">
                                    <div class="card-header">
                                        Post Content
                                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left" title="Markdown is supported within the post content editor."></i>
                                    </div>
                                    <div class="card-body">
                                        <textarea id="postEditor">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit similique distinctio quidem blanditiis architecto ullam a itaque quisquam nihil! Unde ducimus deleniti exercitationem minima, molestiae ab saepe libero. Doloribus, a?
 
Magnam amet labore exercitationem maxime consectetur molestias quas quia dicta, praesentium minus illum quis fuga, fugiat velit voluptate sed nostrum ipsam atque.
 
## Creating Something New
Laborum placeat quas accusantium vitae perferendis dolores possimus tempora, qui consectetur hic ullam autem. Enim, rerum obcaecati numquam quaerat necessitatibus voluptatem? Repellat!
 
Quasi, quos quaerat? Sint at odit possimus ullam saepe suscipit officiis nobis eaque, laudantium ut earum tempore repellendus mollitia odio nam! Unde?</textarea
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-header-actions">
                                    <div class="card-header">
                                        Publish
                                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left" title="Your updates will be live once a moderator approves the changes."></i>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-grid"><button class="fw-500 btn btn-primary">Submit Updates</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>