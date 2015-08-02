<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="post-preview">
            <?= $this->Html->link($this->Html->tag('h2', "Man must explore, and this is exploration at its greatest.".$this->Html->tag('h3',"Problems look mighty small from 150 miles up",['class'=>'post-subtitle'])."", ['class' => 'post-title']), ['controller' => 'posts', 'action' => 'index'], ['escape' => false]) ?>
            <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
        </div>
        <hr>
        <div class="post-preview">
            <?= $this->Html->link($this->Html->tag('h2', "I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.", ['class' => 'post-title']), ['controller' => 'posts', 'action' => 'index'], ['escape' => false]) ?>

            <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
        </div>
        <hr>
        <div class="post-preview">
            <?= $this->Html->link($this->Html->tag('h2', "Man must explore, and this is exploration at its greatest.".$this->Html->tag('h3',"Problems look mighty small from 150 miles up",['class'=>'post-subtitle'])."", ['class' => 'post-title']), ['controller' => 'posts', 'action' => 'index'], ['escape' => false]) ?>

            <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
        </div>
        <hr>
        <div class="post-preview">
            <?= $this->Html->link($this->Html->tag('h2', "Man must explore, and this is exploration at its greatest.".$this->Html->tag('h3',"Problems look mighty small from 150 miles up",['class'=>'post-subtitle'])."", ['class' => 'post-title']), ['controller' => 'posts', 'action' => 'index'], ['escape' => false]) ?>

            <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
        </div>
        <hr>
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <?= $this->Html->link(__("Older Posts"),['controller'=>'posts','action'=>'index']) ?>
            </li>
        </ul>
    </div>
</div>