<?php

namespace App\Command;

use App\Entity\Product;
use App\Entity\User;
use App\Sevices\CreateBid;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CreateBidCommand extends Command
{
    protected static $defaultName = 'app:create-bit';

    /**
     * @var CreateBid
     */
    private $createBid;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(CreateBid $createBid, EntityManagerInterface $entityManager)
    {
       parent::__construct();

       $this->createBid = $createBid;
       $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this->setDescription('Create new bit for user')
            ->addOption('email', 'm', InputOption::VALUE_REQUIRED, 'User email')
            ->addOption('lotId', 'i', InputOption::VALUE_REQUIRED, 'Lot id')
            ->addOption('amount', 'a', InputOption::VALUE_REQUIRED, 'Amount for lot');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $email = $input->getOption('email');
        $lotId = $input->getOption('lotId');
        $amount = $input->getOption('amount');

        $output->writeln(sprintf('Your email: %s', $email));
        $output->writeln(sprintf('Your lot id: %s', $lotId));
        $output->writeln(sprintf('Your amount: %s', $amount));

        $product = $this->entityManager->getRepository(Product::class)->find($lotId);
        $user = $this->entityManager->getRepository(User::class)->findOneByEmail($email);

        if ($this->createBid->create($user, $product, $amount)) {
            $output->writeln('Bit created');
        } else {
            $output->writeln('Bit not create');
        }
    }
}