<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Liste des utilisateurs')
            ->setEntityLabelInSingular('un utilisateur')
            ->setPageTitle('index', 'Portfolio - Administration des utilisateurs')
            ->setPageTitle('detail', 'Détail de l\'utilisateur')
            ->setSearchFields(['pseudo']);
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            TextField::new('pseudo', 'Pseudonyme')->setSortable(true),
            TextField::new('fullName', 'Nom complet')->setSortable(false),
            TextField::new('email')->setFormTypeOption('disabled', 'disabled')->setSortable(false),
            ChoiceField::new('roles', 'Rôles')
                ->setChoices([
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                ])
                ->allowMultipleChoices()
                ->renderExpanded()
                ->hideOnIndex(),
            DateTimeField::new('createdAt', 'Date de création')
                ->setFormTypeOption('disabled', 'disabled')
                ->setSortable(true)
                ->formatValue(function ($value, $entity) {
                    return $value instanceof \DateTimeInterface ? $value->format('d/m/Y') : '';
                }),
        ];

        if ($pageName === Crud::PAGE_DETAIL) {
            $fields[] = ArrayField::new('comments', 'Commentaires')
                ->formatValue(function ($comments) {
                    if ($comments === null || count($comments) === 0) {
                        return 'Aucun commentaire';
                    }
                    return implode("\n", array_map(function ($comment) {
                        return $comment instanceof Comment ? $comment->getContentComment() : 'Commentaire invalide';
                    }, $comments->toArray()));
                });
        }

        return $fields;
    }

    public function configureActions(Actions $actions): Actions
    {
        $viewAction = Action::new('detail', 'Détail')
            ->linkToCrudAction(Crud::PAGE_DETAIL)
            ->setCssClass('btn btn-link');

        $historyAction = Action::new('usernameHistory', 'Historique pseudonymes')
            ->linkToUrl(function (User $entity) {
                $url = '?crudAction=index&crudControllerFqcn=App%5CController%5CAdmin%5CUsernameHistoryCrudController&filters%5Buser%5D%5Bcomparison%5D=%3D&filters%5Buser%5D%5Bvalue%5D=' . $entity->getId();
                return $url;
            })
            ->setCssClass('btn btn-link');

        return $actions
            ->add(Crud::PAGE_INDEX, $viewAction)
            ->add(Crud::PAGE_INDEX, $historyAction)
            ->add(Crud::PAGE_DETAIL, $historyAction)
            ->disable(Action::NEW);
    }
}
