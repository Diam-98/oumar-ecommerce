<?php

namespace App\Controller\Admin;

use App\Entity\TopBarPromo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class TopBarPromoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TopBarPromo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            UrlField::new('link'),
        ];
    }
}