<?php

namespace App\Policies;

use App\User;
use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    /*
     * ----------------------
     * User's actions
     * ----------------------
     */

    /**
     * Determine whether the user can view the article.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return mixed
     */
    public function view(User $user, Article $article)
    {
        return $this->isUsersArticle($user, $article);
    }

    /**
     * Determine whether the user can create articles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the article.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return mixed
     */
    public function update(User $user, Article $article)
    {
        return $this->isUsersArticle($user, $article);
    }

    /**
     * Determine whether the user can delete the article.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return mixed
     */
    public function delete(User $user, Article $article)
    {
        return $this->isUsersArticle($user, $article);
    }



    /*
    * ----------------------
    * Criteria
    * ----------------------
    */

    /**
     * Determines whether the article belongs to the user.
     *
     * @param User $user
     * @param Article $article
     * @return bool
     */
    private function isUsersArticle(User $user, Article $article)
    {
        return $article->user_id === $user->id;
    }
}
