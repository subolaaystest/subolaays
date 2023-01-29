<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdTranslationsTableSeeder::class);
        $this->call(AdminPasswordResetsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(AdsTableSeeder::class);
        $this->call(BankTranslationsTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(BlogTranslationsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(BuyerCategoryTranslationsTableSeeder::class);
        $this->call(BuyersTableSeeder::class);
        $this->call(BuyersAddressesTableSeeder::class);
        $this->call(BuyersCategoriesTableSeeder::class);
        $this->call(BuyersMainCategoriesTableSeeder::class);
        $this->call(CartTableSeeder::class);
        $this->call(CartsProductsTableSeeder::class);
        $this->call(ChatMessageTableSeeder::class);
        $this->call(ChatsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CityTranslationsTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CountryTranslationsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(CurrencyTranslationsTableSeeder::class);
        $this->call(DealsTableSeeder::class);
        $this->call(DealsOffersTableSeeder::class);
        $this->call(DealsProductsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FaqTranslationsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(FollowersTableSeeder::class);
        $this->call(LanguageTranslationsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(MainCategoriesTableSeeder::class);
        $this->call(MainCategoryTranslationsTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(OauthAccessTokensTableSeeder::class);
        $this->call(OauthAuthCodesTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
        $this->call(OauthRefreshTokensTableSeeder::class);
        $this->call(OrderProductsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PageTranslationsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentMethodTranslationsTableSeeder::class);
        $this->call(PaymentsMethodsTableSeeder::class);
        $this->call(PermissionTranslationsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(ProductTranslationsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductsSmartsPricesTableSeeder::class);
        $this->call(RankTranslationsTableSeeder::class);
        $this->call(RanksTableSeeder::class);
        $this->call(SellerCategoryTranslationsTableSeeder::class);
        $this->call(SellersTableSeeder::class);
        $this->call(SellersAreasPointsTableSeeder::class);
        $this->call(SellersBanksAccountsTableSeeder::class);
        $this->call(SellersCategoriesTableSeeder::class);
        $this->call(SellersMainCategoriesTableSeeder::class);
        $this->call(SellersPaymentsMethodsTableSeeder::class);
        $this->call(SellersShippingMethodsTableSeeder::class);
        $this->call(SellersStoragesTableSeeder::class);
        $this->call(SellersTeamsTableSeeder::class);
        $this->call(SettingTranslationsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ShippingMethodTranslationsTableSeeder::class);
        $this->call(ShippingMethodsTableSeeder::class);
        $this->call(StorageTypeTranslationsTableSeeder::class);
        $this->call(StoragesTypesTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(SubCategoryTranslationsTableSeeder::class);
        $this->call(TaxsTableSeeder::class);
        $this->call(TrademarkTranslationsTableSeeder::class);
        $this->call(TrademarksTableSeeder::class);
        $this->call(UserPermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProductAttributeSeeder::class);
        $this->call(ProductOptionalSeeder::class);
    }
}

