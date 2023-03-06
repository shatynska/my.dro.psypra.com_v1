import { Head } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';
import Header from '@/Components/Header';
import Container from '@/Components/Container';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Link, useForm } from '@inertiajs/react';
import { Transition } from '@headlessui/react';
import useTypedPage from '@/Hooks/useTypedPage';
import useRoute from '@/Hooks/useRoute';

export default function Main() {

    const route = useRoute();
    const specialist = useTypedPage().props.auth.specialist;
    const { data, setData, patch, errors, processing, recentlySuccessful } = useForm({
        name: specialist.name,
    });

    const submit = (e: { preventDefault: () => void }) => {
        e.preventDefault();
        patch(route('main.update'), {
            preserveScroll: true,
        });
    };


    return (
        <>
            <Head title='Головне' />
            <Header value='Головне' />
            <Container withNoHorizontalPadding>
                <div className='overflow-hidden border bg-white sm:rounded-lg'>
                    <div>
                        <div className='bg-white p-4 sm:p-20'>

                            <section>
                                <header className='mb-4 px-4 sm:px-0'>
                                    <h2 className='text-lg font-medium text-slate-900'>Ім`я та прізвище</h2>
                                </header>
                                <div className=''>
                                    <form onSubmit={submit} className='space-y-6'>
                                        <div>
                                            <InputLabel forInput='name' value='Ім`я' />

                                            <TextInput
                                                id='name'
                                                type='text'
                                                value={data.name}
                                                onChange={(e) => setData('name', e.target.value)}
                                                required
                                                autoFocus
                                                autoComplete='name'
                                            />

                                            <InputError className='mt-2' message={errors.name} />
                                        </div>
                                    

                                        <div className='flex items-center gap-4'>
                                            <PrimaryButton disabled={processing}>Зберегти</PrimaryButton>

                                            <Transition
                                                show={recentlySuccessful}
                                                enterFrom='opacity-0'
                                                leaveTo='opacity-0'
                                                className='transition ease-in-out'>
                                                <p className='text-sm text-slate-600'>Збережено.</p>
                                            </Transition>
                                        </div>
                                    </form>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </Container>
        </>
    );
}

Main.layout = (page: any) => <AppLayout children={page} />;
